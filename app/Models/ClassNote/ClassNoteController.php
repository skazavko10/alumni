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
                                            ->paginate(10);

        $secondPeriodClassNotes = ClassNote::where('post_date', '>=', '1950')
                                            ->where('post_date', '<=', '1959')
                                            ->paginate(10);

        $thirdPeriodClassNotes = ClassNote::where('post_date', '>=', '1960')
                                            ->where('post_date', '<=', '1969')
                                            ->paginate(10);

        $fourthPeriodClassNotes = ClassNote::where('post_date', '>=', '1970')
                                            ->where('post_date', '<=', '1979')
                                            ->paginate(10);

        $fifthPeriodClassNotes = ClassNote::where('post_date', '>=', '1980')
                                            ->where('post_date', '<=', '1989')
                                            ->paginate(10);

        $sixthPeriodClassNotes = ClassNote::where('post_date', '>=', '1990')
                                            ->where('post_date', '<=', '1999')
                                            ->paginate(10);

        $seventhPeriodClassNotes = ClassNote::where('post_date', '>=', '2000')
                                            ->where('post_date', '<=', '2009')
                                            ->paginate(10);

        $eightPeriodClassNotes = ClassNote::where('post_date', '>=', '2010')
                                            ->paginate(10);

        return view('class-notes.index')->with([
            'firstPeriodClassNotes' => json_encode($firstPeriodClassNotes->items()),
            'secondPeriodClassNotes' => json_encode($secondPeriodClassNotes->items()),
            'thirdPeriodClassNotes' => json_encode($thirdPeriodClassNotes->items()),
            'fourthPeriodClassNotes' => json_encode($fourthPeriodClassNotes->items()),
            'fifthPeriodClassNotes' => json_encode($fifthPeriodClassNotes->items()),
            'sixthPeriodClassNotes' => json_encode($sixthPeriodClassNotes->items()),
            'seventhPeriodClassNotes' => json_encode($seventhPeriodClassNotes->items()),
            'eightPeriodClassNotes' => json_encode($eightPeriodClassNotes->items()),
            'firstPeriodClassNotesPaginator' => json_encode($firstPeriodClassNotes),
            'secondPeriodClassNotesPaginator' => json_encode($secondPeriodClassNotes),
            'thirdPeriodClassNotesPaginator' => json_encode($thirdPeriodClassNotes),
            'fourthPeriodClassNotesPaginator' => json_encode($fourthPeriodClassNotes),
            'fifthPeriodClassNotesPaginator' => json_encode($fifthPeriodClassNotes),
            'sixthPeriodClassNotesPaginator' => json_encode($sixthPeriodClassNotes),
            'seventhPeriodClassNotesPaginator' => json_encode($seventhPeriodClassNotes),
            'eightPeriodClassNotesPaginator' => json_encode($eightPeriodClassNotes)
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

    public function firstPeriodPagination()
    {
        $firstPeriodClassNotes = ClassNote::where('post_date', '>=', '1943')
                                            ->where('post_date', '<=', '1949')
                                            ->paginate(10);

        $returnArray['firstPeriodClassNotes'] = $firstPeriodClassNotes->items();
        $returnArray['firstPeriodClassNotesPaginator'] = $firstPeriodClassNotes;

        return json_encode($returnArray);                                       
    }

    public function secondPeriodPagination()
    {
        $secondPeriodClassNotes = ClassNote::where('post_date', '>=', '1950')
                                            ->where('post_date', '<=', '1959')
                                            ->paginate(10);

        $returnArray['secondPeriodClassNotes'] = $secondPeriodClassNotes->items();
        $returnArray['secondPeriodClassNotesPaginator'] = $secondPeriodClassNotes;

        return json_encode($returnArray);
    }

    public function thirdPeriodPagination()
    {
        $thirdPeriodClassNotes = ClassNote::where('post_date', '>=', '1960')
                                            ->where('post_date', '<=', '1969')
                                            ->paginate(10);

        $returnArray['thirdPeriodClassNotes'] = $thirdPeriodClassNotes->items();
        $returnArray['thirdPeriodClassNotesPaginator'] = $thirdPeriodClassNotes;

        return json_encode($returnArray);
    }

    public function fourthPeriodPagination()
    {
        $fourthPeriodClassNotes = ClassNote::where('post_date', '>=', '1970')
                                            ->where('post_date', '<=', '1979')
                                            ->paginate(10);

        $returnArray['fourthPeriodClassNotes'] = $fourthPeriodClassNotes->items();
        $returnArray['fourthPeriodClassNotesPaginator'] = $fourthPeriodClassNotes;

        return json_encode($returnArray);
    }

    public function fifthPeriodPagination()
    {
        $fifthPeriodClassNotes = ClassNote::where('post_date', '>=', '1980')
                                            ->where('post_date', '<=', '1989')
                                            ->paginate(10);

        $returnArray['fifthPeriodClassNotes'] = $fifthPeriodClassNotes->items();
        $returnArray['fifthPeriodClassNotesPaginator'] = $fifthPeriodClassNotes;

        return json_encode($returnArray);
    }

    public function sixthPeriodPagination()
    {
        $sixthPeriodClassNotes = ClassNote::where('post_date', '>=', '1990')
                                            ->where('post_date', '<=', '1999')
                                            ->paginate(10);

        $returnArray['sixthPeriodClassNotes'] = $sixthPeriodClassNotes->items();
        $returnArray['sixthPeriodClassNotesPaginator'] = $sixthPeriodClassNotes;

        return json_encode($returnArray);
    }

    public function seventhPeriodPagination()
    {
        $seventhPeriodClassNotes = ClassNote::where('post_date', '>=', '2000')
                                            ->where('post_date', '<=', '2009')
                                            ->paginate(10);

        $returnArray['seventhPeriodClassNotes'] = $seventhPeriodClassNotes->items();
        $returnArray['seventhPeriodClassNotesPaginator'] = $seventhPeriodClassNotes;

        return json_encode($returnArray);
    }

    public function eightPeriodPagination()
    {
        $eightPeriodClassNotes = ClassNote::where('post_date', '>=', '2010')
                                            ->paginate(10);

        $returnArray['eightPeriodClassNotes'] = $eightPeriodClassNotes->items();
        $returnArray['eightPeriodClassNotesPaginator'] = $eightPeriodClassNotes;

        return json_encode($returnArray);
    }
}
