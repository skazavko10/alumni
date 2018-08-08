<?php

namespace App\Models\UserPhotoGallery;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserPhotoGallery\UserPhotoGallery;

class UserPhotoGalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = UserPhotoGallery::orderBy('created_at', 'DESC')->paginate(12);

        $firstColumnImages = $images->slice(0, 4);
        $secondColumnImages = $images->slice(4, 4);
        $thirdColumnImages = $images->slice(8, 4);

        $firstColumnImages = array_slice($firstColumnImages->toArray(), 0);
        $secondColumnImages = array_slice($secondColumnImages->toArray(), 0);
        $thirdColumnImages = array_slice($thirdColumnImages->toArray(), 0);

        return view('photo-gallery.index')->with([
            'firstColumnImages' => json_encode($firstColumnImages),
            'secondColumnImages' => json_encode($secondColumnImages),
            'thirdColumnImages' => json_encode($thirdColumnImages),
            'lastPage' => json_encode($images->lastPage()),
            'currentPage' => json_encode($images->currentPage())
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserPhotoGalleryRequest $request)
    {
        $imageFile = $request->input('images');

        dd('IOIO');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function loadMorePhotos()
    {
        $images = UserPhotoGallery::orderBy('created_at', 'DESC')->paginate(12);

        $firstColumnImages = $images->slice(0, 4);
        $secondColumnImages = $images->slice(4, 4);
        $thirdColumnImages = $images->slice(8, 4);

        $firstColumnImages = array_slice($firstColumnImages->toArray(), 0);
        $secondColumnImages = array_slice($secondColumnImages->toArray(), 0);
        $thirdColumnImages = array_slice($thirdColumnImages->toArray(), 0);

        $returnArray['firstColumnImages'] = $firstColumnImages;
        $returnArray['secondColumnImages'] = $secondColumnImages;
        $returnArray['thirdColumnImages'] = $thirdColumnImages;

        return json_encode($returnArray);
    }
}
