@extends('layouts.app')

@section('content')
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

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

	<div class="row photo-order">
		<div class="col-md-4 latest-photos">
			<h4>LATEST UPLOADS</h4>
		</div>

		<div class="col-md-4 search-by-year">
			<h4>SEARCH BY YEAR</h4>
			<select>
				<option>1943-49</option>
				<option>1950-59</option>
				<option>1960-69</option>
				<option>1970-79</option>
				<option>1980-89</option>
				<option>1990-99</option>
				<option>2000-2009</option>
				<option>2010-TODAY</option>
			</select>
		</div>

		<div class="col-md-4 display-style">
			
		</div>
	</div>

	<div class="photos-container" id="v-app">
		<div class="row">
			<div class="column">
				<span v-for="image in firstColumnImages">
					<img :src="fullImagePath(image.photo_path)" style="width:100%">
				</span>
			</div>

			<div class="column">
				<span v-for="image in secondColumnImages">
					<img :src="fullImagePath(image.photo_path)" style="width:100%">
				</span>
			</div>

			<div class="column">
				<span v-for="image in thirdColumnImages">
					<img :src="fullImagePath(image.photo_path)" style="width:100%">
				</span>
			</div>
		</div>

		<div class="row show-more-images-container">
			<h4>
				<span v-on:click.self="loadMorePhotos()">SHOW MORE</span>
			</h4>
		</div>
	</div>

	<script>
		
		var app = new Vue({
		  	el: '#v-app',
		  
			data() {
				return {
					firstColumnImages: {!! $firstColumnImages !!},
				    secondColumnImages: {!! $secondColumnImages !!},
				    thirdColumnImages: {!! $thirdColumnImages !!},
				    lastPage: {!! $lastPage !!},
				    currentPage: {!! $currentPage !!},
				    title: 'S'
				}
			},

	        mounted() {
	        	
	        },

			methods: {
				fullImagePath: function(photo_path) {
					return '/images/photo_gallery/' + photo_path;
				},

				loadMorePhotos: function() {
			      	console.log('CLICK');
			    }
		   	}
		});

	</script>
@endsection