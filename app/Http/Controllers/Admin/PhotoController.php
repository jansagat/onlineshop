<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PhotoRequest;
use App\Photo;
use App\Http\Controllers\Controller;

class PhotoController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @param Photo $photo
     * @return \Illuminate\Http\Response
     */
    public function index(Photo $photo)
    {
        $photos = $photo->all();

        return view('admin.photo.all', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.photo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  PhotoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PhotoRequest $request, Photo $photo)
    {
        $photo->add($request);

        return redirect(route('photo.index', $photo));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        return redirect(route('photo.edit', $photo));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        return view('admin.photo.edit', compact('photo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  PhotoRequest $request  $request
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(PhotoRequest $request, Photo $photo)
    {
        $photo->updatePhotoData($request);

        return redirect(route('photo.edit', $photo));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        $photo->deletePhoto($photo);

        return redirect(route('photo.index', $photo));
    }
}
