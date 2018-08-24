<?php

namespace App\Models\UserPhotoGallery;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserPhotoGallery\UserPhotoGallery;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

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
        $images = UserPhotoGallery::where('post_date', '>=', '2010')
                    ->where('post_date', '<=', date("Y"))
                    ->with('user')
                    ->orderBy('created_at', 'DESC')
                    ->paginate(12);

        $firstColumnImages = $images->slice(0, 4);
        $secondColumnImages = $images->slice(4, 4);
        $thirdColumnImages = $images->slice(8, 4);
        $simpleGridImages = $images->slice(0);

        $firstColumnImages = array_slice($firstColumnImages->toArray(), 0);
        $secondColumnImages = array_slice($secondColumnImages->toArray(), 0);
        $thirdColumnImages = array_slice($thirdColumnImages->toArray(), 0);
        $simpleGridImages = array_slice($simpleGridImages->toArray(), 0);

        return view('photo-gallery.index')->with([
            'firstColumnImages' => json_encode($firstColumnImages),
            'secondColumnImages' => json_encode($secondColumnImages),
            'thirdColumnImages' => json_encode($thirdColumnImages),
            'simpleGridImages' => json_encode($simpleGridImages),
            'lastPage' => json_encode($images->lastPage()),
            'currentPage' => json_encode($images->currentPage())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserPhotoGalleryRequest $request)
    {
        $imageFiles = $request->images;

        $firstColumnImages = [];
        $secondColumnImages = [];
        $thirdColumnImages = [];
        $simpleGridImages = [];
        $counter = 0;
        foreach ($imageFiles as $image) {
            $imageNameWithPath = Storage::putFile('public/photo_gallery', $image);
            $imageName = explode('public/photo_gallery/', $imageNameWithPath)[1];
        
            $photoGallery = UserPhotoGallery::create([
                'user_id' => Auth::id(),
                'photo_path' => $imageName,
                'post_date' => date('Y')
            ]);

            if($counter % 3 == 0) {
                $firstColumnImages[] = UserPhotoGallery::with('user')
                                ->find($photoGallery->id);
            }
            else if($counter % 3 == 1) {
                $secondColumnImages[] = UserPhotoGallery::with('user')
                                ->find($photoGallery->id);
            }
            else {
                $thirdColumnImages[] = UserPhotoGallery::with('user')
                                ->find($photoGallery->id);
            }

            $simpleGridImages[] = UserPhotoGallery::with('user')
                                    ->find($photoGallery->id);
            
            $counter++;
        }

        $returnArray['firstColumnImages'] = $firstColumnImages;
        $returnArray['secondColumnImages'] = $secondColumnImages;
        $returnArray['thirdColumnImages'] = $thirdColumnImages;
        $returnArray['simpleGridImages'] = $simpleGridImages;

        return json_encode($returnArray);
    }

    public function loadMorePhotos()
    {
        $images = UserPhotoGallery::orderBy('created_at', 'DESC')
                    ->with('user')
                    ->paginate(12);

        $firstColumnImages = $images->slice(0, 4);
        $secondColumnImages = $images->slice(4, 4);
        $thirdColumnImages = $images->slice(8, 4);
        $simpleGridImages = $images->slice(0);

        $firstColumnImages = array_slice($firstColumnImages->toArray(), 0);
        $secondColumnImages = array_slice($secondColumnImages->toArray(), 0);
        $thirdColumnImages = array_slice($thirdColumnImages->toArray(), 0);
        $simpleGridImages = array_slice($simpleGridImages->toArray(), 0);

        $returnArray['firstColumnImages'] = $firstColumnImages;
        $returnArray['secondColumnImages'] = $secondColumnImages;
        $returnArray['thirdColumnImages'] = $thirdColumnImages;
        $returnArray['simpleGridImages'] = $simpleGridImages;

        return json_encode($returnArray);
    }

    public function filterPhotosByPeriod($periodStart, $periodEnd)
    {
        $images = UserPhotoGallery::where('post_date', '>=', $periodStart)
                    ->where('post_date', '<=', $periodEnd)
                    ->with('user')
                    ->orderBy('created_at', 'DESC')
                    ->paginate(12);

        $firstColumnImages = $images->slice(0, 4);
        $secondColumnImages = $images->slice(4, 4);
        $thirdColumnImages = $images->slice(8, 4);
        $simpleGridImages = $images->slice(0);

        $firstColumnImages = array_slice($firstColumnImages->toArray(), 0);
        $secondColumnImages = array_slice($secondColumnImages->toArray(), 0);
        $thirdColumnImages = array_slice($thirdColumnImages->toArray(), 0);
        $simpleGridImages = array_slice($simpleGridImages->toArray(), 0);

        $returnArray['firstColumnImages'] = $firstColumnImages;
        $returnArray['secondColumnImages'] = $secondColumnImages;
        $returnArray['thirdColumnImages'] = $thirdColumnImages;
        $returnArray['simpleGridImages'] = $simpleGridImages;
        $returnArray['lastPage'] = $images->lastPage();
        $returnArray['currentPage'] = $images->currentPage();

        return json_encode($returnArray);
    }
}
