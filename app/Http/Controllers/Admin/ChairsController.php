<?php

namespace App\Http\Controllers\Admin;

use App\Country;
use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Chairs;
use App\Http\Requests\CreateChairsRequest;
use App\Http\Requests\UpdateChairsRequest;
use Illuminate\Http\Request;



class ChairsController extends Controller {

	/**
	 * Display a listing of chairs
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $chairs = Chairs::all();

		return view('admin.chairs.index', compact('chairs'));
	}

	/**
	 * Show the form for creating a new chairs
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{

		$country_all = Country::all();
		foreach ($country_all as $item) {
			$country_id[$item -> id] = $item -> title;

		}
	    return view('admin.chairs.create', compact('country_id'));
	}

	/**
	 * Store a newly created chairs in storage.
	 *
     * @param CreateChairsRequest|Request $request
	 */
	public function store(CreateChairsRequest $request)
	{
	    
		Chairs::create($request->all());

		return redirect()->route('admin.chairs.index');
	}

	/**
	 * Show the form for editing the specified chairs.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$chairs = Chairs::find($id);
	    
	    
		return view('admin.chairs.edit', compact('chairs'));
	}

	/**
	 * Update the specified chairs in storage.
     * @param UpdateChairsRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateChairsRequest $request)
	{
		$chairs = Chairs::findOrFail($id);

        

		$chairs->update($request->all());

		return redirect()->route('admin.chairs.index');
	}

	/**
	 * Remove the specified chairs from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Chairs::destroy($id);

		return redirect()->route('admin.chairs.index');
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
            Chairs::destroy($toDelete);
        } else {
            Chairs::whereNotNull('id')->delete();
        }

        return redirect()->route('admin.chairs.index');
    }

}
