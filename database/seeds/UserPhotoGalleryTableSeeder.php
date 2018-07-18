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
        	'photo_path' => '814410-free-wallpaper.jpg'
        ]);

        $UserPhotoGallery1 = UserPhotoGallery::create([
        	'user_id' => '5',
        	'photo_path' => '35914140-hd-wallpapers-download.jpg'
        ]);

        $UserPhotoGallery1 = UserPhotoGallery::create([
        	'user_id' => '5',
        	'photo_path' => 'beautiful_nature_landscape_02_hd_picture_166206.jpg'
        ]);

        $UserPhotoGallery1 = UserPhotoGallery::create([
        	'user_id' => '4',
        	'photo_path' => 'beautiful_nature_landscape_04_hd_picture_166204.jpg'
        ]);

        $UserPhotoGallery1 = UserPhotoGallery::create([
        	'user_id' => '2',
        	'photo_path' => 'hd_picture_of_the_beautiful_natural_scenery_01_166251.jpg'
        ]);

        $UserPhotoGallery1 = UserPhotoGallery::create([
        	'user_id' => '1',
        	'photo_path' => 'hd_picture_of_the_beautiful_natural_scenery_04_169926.jpg'
        ]);

		$UserPhotoGallery1 = UserPhotoGallery::create([
        	'user_id' => '1',
        	'photo_path' => 'wallpaper.wiki-1080p-Wallpapers-Full-HD-Download-PIC-WPE0014320.jpg'
        ]);

        $UserPhotoGallery1 = UserPhotoGallery::create([
        	'user_id' => '1',
        	'photo_path' => 'WHDQ-512962961.jpg'
        ]);
    }
}
