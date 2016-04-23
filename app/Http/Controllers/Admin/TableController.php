<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Table;
use App\Http\Requests\CreateTableRequest;
use App\Http\Requests\UpdateTableRequest;
use Illuminate\Http\Request;



class TableController extends Controller {

	/**
	 * Display a listing of table
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $table = Table::all();

		return view('admin.table.index', compact('table'));
	}

	/**
	 * Show the form for creating a new table
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.table.create');
	}

	/**
	 * Store a newly created table in storage.
	 *
     * @param CreateTableRequest|Request $request
	 */
	public function store(CreateTableRequest $request)
	{
	    
		Table::create($request->all());

		return redirect()->route('admin.table.index');
	}

	/**
	 * Show the form for editing the specified table.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$table = Table::find($id);
	    
	    
		return view('admin.table.edit', compact('table'));
	}

	/**
	 * Update the specified table in storage.
     * @param UpdateTableRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateTableRequest $request)
	{
		$table = Table::findOrFail($id);

        

		$table->update($request->all());

		return redirect()->route('admin.table.index');
	}

	/**
	 * Remove the specified table from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Table::destroy($id);

		return redirect()->route('admin.table.index');
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
            Table::destroy($toDelete);
        } else {
            Table::whereNotNull('id')->delete();
        }

        return redirect()->route('admin.table.index');
    }

}
