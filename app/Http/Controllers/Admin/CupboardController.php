<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Cupboard;
use App\Http\Requests\CreateCupboardRequest;
use App\Http\Requests\UpdateCupboardRequest;
use Illuminate\Http\Request;



class CupboardController extends Controller {

	/**
	 * Display a listing of cupboard
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $cupboard = Cupboard::all();

		return view('admin.cupboard.index', compact('cupboard'));
	}

	/**
	 * Show the form for creating a new cupboard
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.cupboard.create');
	}

	/**
	 * Store a newly created cupboard in storage.
	 *
     * @param CreateCupboardRequest|Request $request
	 */
	public function store(CreateCupboardRequest $request)
	{
	    
		Cupboard::create($request->all());

		return redirect()->route('admin.cupboard.index');
	}

	/**
	 * Show the form for editing the specified cupboard.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$cupboard = Cupboard::find($id);
	    
	    
		return view('admin.cupboard.edit', compact('cupboard'));
	}

	/**
	 * Update the specified cupboard in storage.
     * @param UpdateCupboardRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateCupboardRequest $request)
	{
		$cupboard = Cupboard::findOrFail($id);

        

		$cupboard->update($request->all());

		return redirect()->route('admin.cupboard.index');
	}

	/**
	 * Remove the specified cupboard from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Cupboard::destroy($id);

		return redirect()->route('admin.cupboard.index');
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
            Cupboard::destroy($toDelete);
        } else {
            Cupboard::whereNotNull('id')->delete();
        }

        return redirect()->route('admin.cupboard.index');
    }

}
