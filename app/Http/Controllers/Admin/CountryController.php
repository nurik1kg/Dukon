<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Country;
use App\Http\Requests\CreateCountryRequest;
use App\Http\Requests\UpdateCountryRequest;
use Illuminate\Http\Request;



class CountryController extends Controller {

	/**
	 * Display a listing of country
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $country = Country::all();

		return view('admin.country.index', compact('country'));
	}

	/**
	 * Show the form for creating a new country
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.country.create');
	}

	/**
	 * Store a newly created country in storage.
	 *
     * @param CreateCountryRequest|Request $request
	 */
	public function store(CreateCountryRequest $request)
	{
	    
		Country::create($request->all());

		return redirect()->route('admin.country.index');
	}

	/**
	 * Show the form for editing the specified country.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$country = Country::find($id);
	    
	    
		return view('admin.country.edit', compact('country'));
	}

	/**
	 * Update the specified country in storage.
     * @param UpdateCountryRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateCountryRequest $request)
	{
		$country = Country::findOrFail($id);

        

		$country->update($request->all());

		return redirect()->route('admin.country.index');
	}

	/**
	 * Remove the specified country from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Country::destroy($id);

		return redirect()->route('admin.country.index');
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
            Country::destroy($toDelete);
        } else {
            Country::whereNotNull('id')->delete();
        }

        return redirect()->route('admin.country.index');
    }

}
