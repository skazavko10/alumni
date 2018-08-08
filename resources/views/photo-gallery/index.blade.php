@extends('layouts.app')

@section('content')
	<div class="photo-gallery header-image">
		<div class="upload-photo-container">
			<a href="#" class="upload-your-photos">
				UPLOAD YOUR PHOTOS
			</a>
		</div>
	</div>

	<div class="photo-gallery-text">
		<div class="row">
            <div class="col-md-12 text">
                <h1>PHOTO GALLERY</h1>

                <h4>
                	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </h4>
            </div>
        </div>
	</div>

	<list-photos-component first-column-images="{{ $firstColumnImages }}" second-column-images="{{ $secondColumnImages }}" third-column-images="{{ $thirdColumnImages }}" last-page="{{ $lastPage }}" current-page="{{ $currentPage }}"></list-photos-component>
@endsection