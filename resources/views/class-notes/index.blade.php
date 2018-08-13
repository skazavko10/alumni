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

	<list-class-notes first-period-class-notes="{{ $firstPeriodClassNotes }}" second-period-class-notes="{{ $secondPeriodClassNotes }}" third-period-class-notes="{{ $thirdPeriodClassNotes }}" fourth-period-class-notes="{{ $fourthPeriodClassNotes }}" fifth-period-class-notes="{{ $fifthPeriodClassNotes }}" sixth-period-class-notes="{{ $sixthPeriodClassNotes }}" seventh-period-class-notes="{{ $seventhPeriodClassNotes }}" eight-period-class-notes="{{ $eightPeriodClassNotes }}" first-period-class-notes-paginator="{{ $firstPeriodClassNotesPaginator }}" second-period-class-notes-paginator = "{{ $secondPeriodClassNotesPaginator }}" third-period-class-notes-paginator = "{{ $thirdPeriodClassNotesPaginator }}" fourth-period-class-notes-paginator = "{{ $fourthPeriodClassNotesPaginator }}" fifth-period-class-notes-paginator = "{{ $fifthPeriodClassNotesPaginator }}" sixth-period-class-notes-paginator = "{{ $sixthPeriodClassNotesPaginator }}" seventh-period-class-notes-paginator="{{ $seventhPeriodClassNotesPaginator }}" eight-period-class-notes-paginator="{{ $eightPeriodClassNotesPaginator }}"></list-class-notes>
@endsection