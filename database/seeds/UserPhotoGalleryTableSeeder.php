<?php

use Illuminate\Database\Seeder;
use App\Models\UserPhotoGallery\UserPhotoGallery;

class UserPhotoGalleryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $UserPhotoGallery1 = UserPhotoGallery::create([
        	'user_id' => '6',
        	'photo_path' => '814410-free-wallpaper.jpg',
            'post_date' => '1944'
        ]);

        $UserPhotoGallery1 = UserPhotoGallery::create([
        	'user_id' => '5',
        	'photo_path' => '35914140-hd-wallpapers-download.jpg',
            'post_date' => '1959'
        ]);

        $UserPhotoGallery1 = UserPhotoGallery::create([
        	'user_id' => '5',
        	'photo_path' => 'beautiful_nature_landscape_02_hd_picture_166206.jpg',
            'post_date' => '1977'
        ]);

        $UserPhotoGallery1 = UserPhotoGallery::create([
        	'user_id' => '4',
        	'photo_path' => 'beautiful_nature_landscape_04_hd_picture_166204.jpg',
            'post_date' => '1980'
        ]);

        $UserPhotoGallery1 = UserPhotoGallery::create([
        	'user_id' => '2',
        	'photo_path' => 'hd_picture_of_the_beautiful_natural_scenery_01_166251.jpg',
            'post_date' => '1999'
        ]);

        $UserPhotoGallery1 = UserPhotoGallery::create([
        	'user_id' => '1',
        	'photo_path' => 'hd_picture_of_the_beautiful_natural_scenery_04_169926.jpg',
            'post_date' => '2003'
        ]);

		$UserPhotoGallery1 = UserPhotoGallery::create([
        	'user_id' => '1',
        	'photo_path' => 'wallpaper.wiki-1080p-Wallpapers-Full-HD-Download-PIC-WPE0014320.jpg',
            'post_date' => '2010'
        ]);

        $UserPhotoGallery1 = UserPhotoGallery::create([
        	'user_id' => '1',
        	'photo_path' => 'WHDQ-512962961.jpg',
            'post_date' => '2018'
        ]);

        $UserPhotoGallery1 = UserPhotoGallery::create([
            'user_id' => '4',
            'photo_path' => 'th.jpeg',
            'post_date' => '2017'
        ]);

        $UserPhotoGallery1 = UserPhotoGallery::create([
            'user_id' => '4',
            'photo_path' => 'mi-647_010516041230.jpg',
            'post_date' => '2018'
        ]);

        $UserPhotoGallery1 = UserPhotoGallery::create([
            'user_id' => '2',
            'photo_path' => '68450841-images-wallpapers.jpg',
            'post_date' => '2015'
        ]);

        $UserPhotoGallery1 = UserPhotoGallery::create([
            'user_id' => '2',
            'photo_path' => 'natural-butterfly-image-for-mobile.jpg',
            'post_date' => '2016'
        ]);

        $UserPhotoGallery1 = UserPhotoGallery::create([
            'user_id' => '1',
            'photo_path' => '5507408-romantic-images.jpg',
            'post_date' => '2018'
        ]);
    }
}
