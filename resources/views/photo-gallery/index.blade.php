@extends('layouts.app')

@section('content')
	<list-photos-component first-column-images="{{ $firstColumnImages }}" second-column-images="{{ $secondColumnImages }}" third-column-images="{{ $thirdColumnImages }}" last-page="{{ $lastPage }}" current-page="{{ $currentPage }}"></list-photos-component>
@endsection