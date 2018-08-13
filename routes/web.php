<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', 'Event\TestController@test')->name('test');

Route::resource('class-notes', 'ClassNote\ClassNoteController');

Route::get('first-period-pagination', 'ClassNote\ClassNoteController@firstPeriodPagination');

Route::get('second-period-pagination', 'ClassNote\ClassNoteController@secondPeriodPagination');

Route::get('third-period-pagination', 'ClassNote\ClassNoteController@thirdPeriodPagination');

Route::get('fourth-period-pagination', 'ClassNote\ClassNoteController@fourthPeriodPagination');

Route::get('fifth-period-pagination', 'ClassNote\ClassNoteController@fifthPeriodPagination');

Route::get('sixth-period-pagination', 'ClassNote\ClassNoteController@sixthPeriodPagination');

Route::get('seventh-period-pagination', 'ClassNote\ClassNoteController@seventhPeriodPagination');

Route::get('eight-period-pagination', 'ClassNote\ClassNoteController@eightPeriodPagination');

Route::resource('photo-gallery', 'UserPhotoGallery\UserPhotoGalleryController');

Route::get('photos', 'UserPhotoGallery\UserPhotoGalleryController@loadMorePhotos');

Route::get('filter-photos/{periodStart}/{periodEnd}', 'UserPhotoGallery\UserPhotoGalleryController@filterPhotosByPeriod');