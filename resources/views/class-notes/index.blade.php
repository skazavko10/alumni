@extends('layouts.app')

@section('content')
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

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

	<div class="class-notes-by-period" id="v-app">
		<div class="period">
			<div class="row">
				<div class="col-md-10 first-col">
					<h2 class="first-period">1943 - 1949</h2>	
				</div>
				
				<div class="col-md-2">
					<p>S</p>
				</div>
			</div>

			<div class="additional-section first-period">
				<div class="row">
					<div class="col-md-12">
						<div class="period-header-image">
							
						</div>
					</div>
				</div>

				<div v-for="classNote in firstPeriodClassNotes" class="notes-container">
					<div class="row">
						<div class="col-md-10 title">
							<h1 :class='classNoteId(classNote.id)'>@{{ classNote.name }}</h1>
						</div>

						<div class="col-md-2 expand">
							<span>&#43;</span>
						</div>
					</div>

					<div class="row additional-section" :class='classNoteId(classNote.id)'>
						<div class="col-md-12 text">
							<h5>@{{ classNote.text }}</h5>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="period">
			<div class="row">
				<div class="col-md-10 first-col">
					<h2 class="second-period">1950 - 1959</h2>	
				</div>
				
				<div class="col-md-2">
					<p>S</p>
				</div>
			</div>

			<div class="additional-section second-period">
				<div class="row">
					<div class="col-md-12">
						<div class="period-header-image">
							
						</div>
					</div>
				</div>

				<div v-for="classNote in secondPeriodClassNotes" class="notes-container">
					<div class="row">
						<div class="col-md-10 title">
							<h1 :class='classNoteId(classNote.id)'>@{{ classNote.name }}</h1>
						</div>

						<div class="col-md-2 expand">
							<span>&#43;</span>
						</div>
					</div>

					<div class="row additional-section" :class='classNoteId(classNote.id)'>
						<div class="col-md-12 text">
							<h5>@{{ classNote.text }}</h5>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="period">
			<div class="row">
				<div class="col-md-10 first-col">
					<h2 class="third-period">1960 - 1969</h2>	
				</div>
				
				<div class="col-md-2">
					<p>S</p>
				</div>
			</div>

			<div class="additional-section third-period">
				<div class="row">
					<div class="col-md-12">
						<div class="period-header-image">
							
						</div>
					</div>
				</div>

				<div v-for="classNote in thirdPeriodClassNotes" class="notes-container">
					<div class="row">
						<div class="col-md-10 title">
							<h1 :class='classNoteId(classNote.id)'>@{{ classNote.name }}</h1>
						</div>

						<div class="col-md-2 expand">
							<span>&#43;</span>
						</div>
					</div>

					<div class="row additional-section" :class='classNoteId(classNote.id)'>
						<div class="col-md-12 text">
							<h5>@{{ classNote.text }}</h5>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="period">
			<div class="row">
				<div class="col-md-10 first-col">
					<h2 class="fourth-period">1970 - 1979</h2>	
				</div>
				
				<div class="col-md-2">
					<p>S</p>
				</div>
			</div>

			<div class="additional-section fourth-period">
				<div class="row">
					<div class="col-md-12">
						<div class="period-header-image">
							
						</div>
					</div>
				</div>

				<div v-for="classNote in fourthPeriodClassNotes" class="notes-container">
					<div class="row">
						<div class="col-md-10 title">
							<h1 :class='classNoteId(classNote.id)'>@{{ classNote.name }}</h1>
						</div>

						<div class="col-md-2 expand">
							<span>&#43;</span>
						</div>
					</div>

					<div class="row additional-section" :class='classNoteId(classNote.id)'>
						<div class="col-md-12 text">
							<h5>@{{ classNote.text }}</h5>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="period">
			<div class="row">
				<div class="col-md-10 first-col">
					<h2 class="fifth-period">1980 - 1989</h2>	
				</div>
				
				<div class="col-md-2">
					<p>S</p>
				</div>
			</div>

			<div class="additional-section fifth-period">
				<div class="row">
					<div class="col-md-12">
						<div class="period-header-image">
							
						</div>
					</div>
				</div>

				<div v-for="classNote in fifthPeriodClassNotes" class="notes-container">
					<div class="row">
						<div class="col-md-10 title">
							<h1 :class='classNoteId(classNote.id)'>@{{ classNote.name }}</h1>
						</div>

						<div class="col-md-2 expand">
							<span>&#43;</span>
						</div>
					</div>

					<div class="row additional-section" :class='classNoteId(classNote.id)'>
						<div class="col-md-12 text">
							<h5>@{{ classNote.text }}</h5>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="period">
			<div class="row">
				<div class="col-md-10 first-col">
					<h2 class="sixth-period">1990 - 1999</h2>	
				</div>
				
				<div class="col-md-2">
					<p>S</p>
				</div>
			</div>

			<div class="additional-section sixth-period">
				<div class="row">
					<div class="col-md-12">
						<div class="period-header-image">
							
						</div>
					</div>
				</div>

				<div v-for="classNote in sixthPeriodClassNotes" class="notes-container">
					<div class="row">
						<div class="col-md-10 title">
							<h1 :class='classNoteId(classNote.id)'>@{{ classNote.name }}</h1>
						</div>

						<div class="col-md-2 expand">
							<span>&#43;</span>
						</div>
					</div>

					<div class="row additional-section" :class='classNoteId(classNote.id)'>
						<div class="col-md-12 text">
							<h5>@{{ classNote.text }}</h5>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="period">
			<div class="row">
				<div class="col-md-10 first-col">
					<h2 class="seventh-period">2000 - 2009</h2>	
				</div>
				
				<div class="col-md-2">
					<p>S</p>
				</div>
			</div>

			<div class="additional-section seventh-period">
				<div class="row">
					<div class="col-md-12">
						<div class="period-header-image">
							
						</div>
					</div>
				</div>

				<div v-for="classNote in seventhPeriodClassNotes" class="notes-container">
					<div class="row">
						<div class="col-md-10 title">
							<h1 :class='classNoteId(classNote.id)'>@{{ classNote.name }}</h1>
						</div>

						<div class="col-md-2 expand">
							<span>&#43;</span>
						</div>
					</div>

					<div class="row additional-section" :class='classNoteId(classNote.id)'>
						<div class="col-md-12 text">
							<h5>@{{ classNote.text }}</h5>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="period">
			<div class="row">
				<div class="col-md-10 first-col">
					<h2 class="eight-period">2010 - TODAY</h2>	
				</div>
				
				<div class="col-md-2">
					<p>S</p>
				</div>
			</div>

			<div class="additional-section eight-period">
				<div class="row">
					<div class="col-md-12">
						<div class="period-header-image">
							
						</div>
					</div>
				</div>

				<div v-for="classNote in eightPeriodClassNotes" class="notes-container">
					<div class="row">
						<div class="col-md-10 title">
							<h1 :class='classNoteId(classNote.id)'>@{{ classNote.name }}</h1>
						</div>

						<div class="col-md-2 expand">
							<span>&#43;</span>
						</div>
					</div>

					<div class="row additional-section" :class='classNoteId(classNote.id)'>
						<div class="col-md-12 text">
							<h5>@{{ classNote.text }}</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

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

	<script>
		
		var app = new Vue({
		  	el: '#v-app',
		  
			data: {
				firstPeriodClassNotes: {!! $firstPeriodClassNotes !!},
			    secondPeriodClassNotes: {!! $secondPeriodClassNotes !!},
			    thirdPeriodClassNotes: {!! $thirdPeriodClassNotes !!},
			    fourthPeriodClassNotes: {!! $fourthPeriodClassNotes !!},
			    fifthPeriodClassNotes: {!! $fifthPeriodClassNotes !!},
			    sixthPeriodClassNotes: {!! $sixthPeriodClassNotes !!},
			    seventhPeriodClassNotes: {!! $seventhPeriodClassNotes !!},
			    eightPeriodClassNotes: {!! $eightPeriodClassNotes !!}
			},

			methods: {
				classNoteId: function(id) {
					return 'note-' + id;
				}
		   	}
		});

	</script>
@endsection