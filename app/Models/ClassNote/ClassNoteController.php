<?php

namespace App\Models\ClassNote;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\ClassNote\ClassNote;
use App\Models\ClassNote\StoreClassNoteRequest;

class ClassNoteController extends Controller
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
        $firstPeriodClassNotes = ClassNote::where('post_date', '>=', '1943')
                                            ->where('post_date', '<=', '1949')
                                            ->get();

        $secondPeriodClassNotes = ClassNote::where('post_date', '>=', '1950')
                                            ->where('post_date', '<=', '1959')
                                            ->get();

        $thirdPeriodClassNotes = ClassNote::where('post_date', '>=', '1960')
                                            ->where('post_date', '<=', '1969')
                                            ->get();

        $fourthPeriodClassNotes = ClassNote::where('post_date', '>=', '1970')
                                            ->where('post_date', '<=', '1979')
                                            ->get();

        $fifthPeriodClassNotes = ClassNote::where('post_date', '>=', '1980')
                                            ->where('post_date', '<=', '1989')
                                            ->get();

        $sixthPeriodClassNotes = ClassNote::where('post_date', '>=', '1990')
                                            ->where('post_date', '<=', '1999')
                                            ->get();

        $seventhPeriodClassNotes = ClassNote::where('post_date', '>=', '2000')
                                            ->where('post_date', '<=', '2009')
                                            ->get();

        $eightPeriodClassNotes = ClassNote::where('post_date', '>=', '2010')
                                            ->get();

        return view('class-notes.index')->with([
            'firstPeriodClassNotes' => json_encode($firstPeriodClassNotes),
            'secondPeriodClassNotes' => json_encode($secondPeriodClassNotes),
            'thirdPeriodClassNotes' => json_encode($thirdPeriodClassNotes),
            'fourthPeriodClassNotes' => json_encode($fourthPeriodClassNotes),
            'fifthPeriodClassNotes' => json_encode($fifthPeriodClassNotes),
            'sixthPeriodClassNotes' => json_encode($sixthPeriodClassNotes),
            'seventhPeriodClassNotes' => json_encode($seventhPeriodClassNotes),
            'eightPeriodClassNotes' => json_encode($eightPeriodClassNotes)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClassNoteRequest $request)
    {
        $input = $request->input();
        $input['user_id'] = Auth::id();
        $input['post_date'] = date('Y');

        $insertedClassNote = ClassNote::create($input);

        return $insertedClassNote;
    }
}
