<?php

namespace App\Http\Controllers\Admin;

use App\Country;
use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Armchair;
use App\Http\Requests\CreateArmchairRequest;
use App\Http\Requests\UpdateArmchairRequest;
use Illuminate\Http\Request;



class ArmchairController extends Controller {

	/**
	 * Display a listing of armchair
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $armchair = Armchair::all();

		return view('admin.armchair.index', compact('armchair'));
	}

	/**
	 * Show the form for creating a new armchair
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{

		$country_all = Country::all();
		foreach ($country_all as $item) {
			$country_id[$item -> id] = $item -> title;

		}
	    return view('admin.armchair.create',compact("country_id"));
	}

	/**
	 * Store a newly created armchair in storage.
	 *
     * @param CreateArmchairRequest|Request $request
	 */
	public function store(CreateArmchairRequest $request)
	{
	    
		Armchair::create($request->all());

		return redirect()->route('admin.armchair.index');
	}

	/**
	 * Show the form for editing the specified armchair.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$armchair = Armchair::find($id);
	    
	    
		return view('admin.armchair.edit', compact('armchair'));
	}

	/**
	 * Update the specified armchair in storage.
     * @param UpdateArmchairRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateArmchairRequest $request)
	{
		$armchair = Armchair::findOrFail($id);

        

		$armchair->update($request->all());

		return redirect()->route('admin.armchair.index');
	}

	/**
	 * Remove the specified armchair from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Armchair::destroy($id);

		return redirect()->route('admin.armchair.index');
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
            Armchair::destroy($toDelete);
        } else {
            Armchair::whereNotNull('id')->delete();
        }

        return redirect()->route('admin.armchair.index');
    }

}
