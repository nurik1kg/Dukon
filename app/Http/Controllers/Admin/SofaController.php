<?php

namespace App\Http\Controllers\Admin;

use App\Country;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Redirect;
use Schema;
use App\Sofa;
use App\Http\Requests\CreateSofaRequest;
use App\Http\Requests\UpdateSofaRequest;
use Illuminate\Http\Request;



class SofaController extends Controller {

	/**
	 * Display a listing of sofa
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $sofa = Sofa::all();

		return view('admin.sofa.index', compact('sofa'));
	}

	/**
	 * Show the form for creating a new sofa
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
        $country_all = Country::all();
		foreach ($country_all as $item) {
			$country_id[$item -> id] = $item -> title;

		}
	    return view('admin.sofa.create', compact("country_id"));
	}

	/**
	 * Store a newly created sofa in storage.
	 *
     * @param CreateSofaRequest|Request $request
	 */
	public function store(CreateSofaRequest $request)
	{
	    
		Sofa::create($request->all());

		return redirect()->route('admin.sofa.index');
	}

	/**
	 * Show the form for editing the specified sofa.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$sofa = Sofa::find($id);


		$country_all = Country::all();
		foreach ($country_all as $item) {
			$country_id[$item -> id] = $item -> title;

		}
		return view('admin.sofa.edit', compact('sofa', "country_id"));
	}

	/**
	 * Update the specified sofa in storage.
     * @param UpdateSofaRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateSofaRequest $request)
	{
		$sofa = Sofa::findOrFail($id);

        

		$sofa->update($request->all());

		return redirect()->route('admin.sofa.index');
	}

	/**
	 * Remove the specified sofa from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Sofa::destroy($id);

		return redirect()->route('admin.sofa.index');
	}

    /**
     * Mass delete function from index page
     * @param Request $request
     *
     * @return mixed
     */
    public function massDelete(Request $request)
    {
        if ($request->get('toDelete') != 'mass') {
            $toDelete = json_decode($request->get('toDelete'));
            Sofa::destroy($toDelete);
        } else {
            Sofa::whereNotNull('id')->delete();
        }

        return redirect()->route('admin.sofa.index');
    }

}
