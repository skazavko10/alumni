@extends('layouts.app')

@section('content')
	<list-photos-component first-column-images-prop="{{ $firstColumnImages }}" second-column-images-prop="{{ $secondColumnImages }}" third-column-images-prop="{{ $thirdColumnImages }}" last-page-prop="{{ $lastPage }}" current-page-prop="{{ $currentPage }}"></list-photos-component>
@endsection