<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Sofa;
use Redirect;
use Schema;
use App\Photo;
use App\Http\Requests\CreatePhotoRequest;
use App\Http\Requests\UpdatePhotoRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;


class PhotoController extends Controller {

	/**
	 * Display a listing of photo
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $photo = Photo::all();

		return view('admin.photo.index', compact('photo'));
	}

	/**
	 * Show the form for creating a new photo
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    $article_all = Sofa::all();

	    
	    return view('admin.photo.create');
	}

	/**
	 * Store a newly created photo in storage.
	 *
     * @param CreatePhotoRequest|Request $request
	 */
	public function store(CreatePhotoRequest $request)
	{
	    $request = $this->saveFiles($request);
		Photo::create($request->all());

		return redirect()->route('admin.photo.index');
	}

	/**
	 * Show the form for editing the specified photo.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$photo = Photo::find($id);
	    
	    
		return view('admin.photo.edit', compact('photo'));
	}

	/**
	 * Update the specified photo in storage.
     * @param UpdatePhotoRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdatePhotoRequest $request)
	{
		$photo = Photo::findOrFail($id);

        $request = $this->saveFiles($request);

		$photo->update($request->all());

		return redirect()->route('admin.photo.index');
	}

	/**
	 * Remove the specified photo from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Photo::destroy($id);

		return redirect()->route('admin.photo.index');
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
            Photo::destroy($toDelete);
        } else {
            Photo::whereNotNull('id')->delete();
        }

        return redirect()->route('admin.photo.index');
    }

}
