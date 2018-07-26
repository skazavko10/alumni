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

	<div class="class-notes-by-period">
		<div class="period row">
			<div class="col-md-10 first-col">
				<h2>1943 - 1949</h2>	
			</div>
			
			<div class="col-md-2">
				<p>S</p>
			</div>
		</div>

		<div class="period row">
			<div class="col-md-10 first-col">
				<h2>1950 - 1959</h2>	
			</div>
			
			<div class="col-md-2">
				<p>S</p>
			</div>
		</div>

		<div class="period row">
			<div class="col-md-10 first-col">
				<h2>1960 - 1969</h2>	
			</div>
			
			<div class="col-md-2">
				<p>S</p>
			</div>
		</div>

		<div class="period row">
			<div class="col-md-10 first-col">
				<h2>1970 - 1979</h2>	
			</div>
			
			<div class="col-md-2 first-col">
				<p>S</p>
			</div>
		</div>

		<div class="period row">
			<div class="col-md-10 first-col">
				<h2>1980 - 1989</h2>	
			</div>
			
			<div class="col-md-2">
				<p>S</p>
			</div>
		</div>

		<div class="period row">
			<div class="col-md-10 first-col">
				<h2>1990 - 1999</h2>	
			</div>
			
			<div class="col-md-2">
				<p>S</p>
			</div>
		</div>

		<div class="period row">
			<div class="col-md-10 first-col">
				<h2>2000 - 2009</h2>	
			</div>
			
			<div class="col-md-2">
				<p>S</p>
			</div>
		</div>

		<div class="period row">
			<div class="col-md-10 first-col">
				<h2>2010 - TODAY</h2>	
			</div>
			
			<div class="col-md-2">
				<p>S</p>
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
			
			<form>
				<div class="row">
					<div class="col-md-10">
						<textarea class="class-note-input" placeholder="Write your words here..." rows="10"></textarea>
					</div>
				</div>

				<div class="row submit-section">
					<div class="col-md-10">
						<div class="row section">
							<div class="col-md-8">
								<h5>Please note your class note will be reviewed before being added to the site</h5>
							</div>

							<div class="col-md-4 button-container">
								<input type="submit" name="" class="submit-class-note" value="SUBMIT">
							</div>		
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
@endsection