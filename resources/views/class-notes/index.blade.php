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

	<list-class-notes first-period-class-notes="{{ $firstPeriodClassNotes }}" second-period-class-notes="{{ $secondPeriodClassNotes }}" third-period-class-notes="{{ $thirdPeriodClassNotes }}" fourth-period-class-notes="{{ $fourthPeriodClassNotes }}" fifth-period-class-notes="{{ $fifthPeriodClassNotes }}" sixth-period-class-notes="{{ $sixthPeriodClassNotes }}" seventh-period-class-notes="{{ $seventhPeriodClassNotes }}" eight-period-class-notes="{{ $eightPeriodClassNotes }}"></list-class-notes>

	<div class="upload-class-notes">
		<div class="row">
			<div class="col-md-10 first-col">
				<h2>UPLOAD YOUR CLASS NOTES</h2>	
			</div>
			
			<div class="col-md-2">
				<div class="arrow">
					<p>S</p>
				</div>
			</div>
		</div>

		<div class="additional-section">
			<div class="row">
				<div class="col-md-10">
					<h5>
						Let your old classmates and the Alumni community know you latest news! Why not use this space to inform the community about marriages, births, deaths, awards and quallifications?
					</h5>
				</div>	
			</div>

			@if ($errors->any())
			    <input type="hidden" class="validation-error">
			@endif
			
			<form action="/class-notes" method="post">
				{!! csrf_field() !!}

				<div class="row">
					<div class="col-md-10">
						@if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif

						<input type="text" name="name" class="class-note-name" placeholder="Class Note Name" value="{{ old('name') }}" required autofocus>
					</div>
				</div>

				<div class="row">
					<div class="col-md-10">
						@if ($errors->has('text'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('text') }}</strong>
                            </span>
                        @endif

						<textarea class="class-note-input" name="text" required placeholder="Write your words here..." rows="10">{{ old('text') }}</textarea>
					</div>
				</div>

				<div class="row submit-section">
					<div class="col-md-10">
						<div class="row section">
							<div class="col-md-8">
								<h5>Please note your class note will be reviewed before being added to the site</h5>
							</div>

							<div class="col-md-4 button-container">
								<input type="submit" class="submit-class-note" value="SUBMIT">
							</div>		
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
@endsection