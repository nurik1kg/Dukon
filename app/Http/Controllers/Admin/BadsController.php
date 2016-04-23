<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Bads;
use App\Http\Requests\CreateBadsRequest;
use App\Http\Requests\UpdateBadsRequest;
use Illuminate\Http\Request;



class BadsController extends Controller {

	/**
	 * Display a listing of bads
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $bads = Bads::all();

		return view('admin.bads.index', compact('bads'));
	}

	/**
	 * Show the form for creating a new bads
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.bads.create');
	}

	/**
	 * Store a newly created bads in storage.
	 *
     * @param CreateBadsRequest|Request $request
	 */
	public function store(CreateBadsRequest $request)
	{
	    
		Bads::create($request->all());

		return redirect()->route('admin.bads.index');
	}

	/**
	 * Show the form for editing the specified bads.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$bads = Bads::find($id);
	    
	    
		return view('admin.bads.edit', compact('bads'));
	}

	/**
	 * Update the specified bads in storage.
     * @param UpdateBadsRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateBadsRequest $request)
	{
		$bads = Bads::findOrFail($id);

        

		$bads->update($request->all());

		return redirect()->route('admin.bads.index');
	}

	/**
	 * Remove the specified bads from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Bads::destroy($id);

		return redirect()->route('admin.bads.index');
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
            Bads::destroy($toDelete);
        } else {
            Bads::whereNotNull('id')->delete();
        }

        return redirect()->route('admin.bads.index');
    }

}
