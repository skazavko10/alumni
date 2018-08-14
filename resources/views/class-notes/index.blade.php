@extends('layouts.app')

@section('content')
	<div class="class-notes header-image">
	</div>

	<div class="class-notes-text">
		<div class="row">
            <div class="col-md-12 text">
                <h1>CLASS NOTES</h1>

                <h4>
                	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </h4>
            </div>
        </div>
	</div>

	<list-class-notes first-period-class-notes-prop="{{ $firstPeriodClassNotes }}" second-period-class-notes-prop="{{ $secondPeriodClassNotes }}" third-period-class-notes-prop="{{ $thirdPeriodClassNotes }}" fourth-period-class-notes-prop="{{ $fourthPeriodClassNotes }}" fifth-period-class-notes-prop="{{ $fifthPeriodClassNotes }}" sixth-period-class-notes-prop="{{ $sixthPeriodClassNotes }}" seventh-period-class-notes-prop="{{ $seventhPeriodClassNotes }}" eight-period-class-notes-prop="{{ $eightPeriodClassNotes }}" first-period-class-notes-paginator-prop="{{ $firstPeriodClassNotesPaginator }}" second-period-class-notes-paginator-prop="{{ $secondPeriodClassNotesPaginator }}" third-period-class-notes-paginator-prop="{{ $thirdPeriodClassNotesPaginator }}" fourth-period-class-notes-paginator-prop="{{ $fourthPeriodClassNotesPaginator }}" fifth-period-class-notes-paginator-prop="{{ $fifthPeriodClassNotesPaginator }}" sixth-period-class-notes-paginator-prop="{{ $sixthPeriodClassNotesPaginator }}" seventh-period-class-notes-paginator-prop="{{ $seventhPeriodClassNotesPaginator }}" eight-period-class-notes-paginator-prop="{{ $eightPeriodClassNotesPaginator }}"></list-class-notes>
@endsection