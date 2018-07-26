@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row header-image-container">
    </div>

    <div class="welcome-container">
        <div class="row welcome-intro">
            <div class="col-md-12">
                @auth
                    <h1>HELLO {{ Auth::user()->name }}!</h1>
                @endauth
            </div>
        </div>

        <div class="row welcome-headline">
            <div class="col-md-12">
                <h3>WELCOME BACK TO YOUR ALUMNI COMMUNITY AREA.</h3>
            </div>
        </div>

        <div class="row welcome-text">
            <div class="col-md-12">
                <h4>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </h4>
            </div>
        </div>
    </div>

    <div class="class-notes-container">
        <div class="row">
            <div class="col-md-12 text">
                <h1>CLASS NOTES</h1>

                <h3 class="headline">Let your old classmates and the Alumni community know you latest news!</h3>

                <h4>Why not use this space to inform the community about marriages, births, deaths, awards and quallifications?</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div>
                    <a class="enter-btn" href="#">ENTER</a>
                </div>
            </div>
        </div>
    </div>

    <div class="photo-gallery-container">
        <div class="row">
            <div class="col-md-12 text">
                <h1>PHOTO GALLERY</h1>

                <h3 class="headline">Share your LST memories with the Alumni community!</h3>

                <h4>Upload your photos of your time at the London School of Theology and share them your fellow alumni, or simply browse those pictures already uploaded by your fellow LST alumni and staff.</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div>
                    <a class="enter-btn" href="#">ENTER</a>
                </div>
            </div>
        </div>
    </div>

    <div class="jobs-container">
        <div class="row">
            <div class="col-md-12 text">
                <h1>JOBS</h1>

                <h3 class="headline">Our Vocations Service is also open to our Alumni.</h3>

                <h4>LST is committed to helping our students find employment after they graduate.</h4>

                <h4>Why not search for your next job or even advertise a job with us?</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div>
                    <a class="enter-btn" href="#">VISIT</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
