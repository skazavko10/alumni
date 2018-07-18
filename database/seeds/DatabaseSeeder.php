<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(UserRolesTableSeeder::class);
       	$this->call(UsersTableSeeder::class);
       	$this->call(ClassNotesTableSeeder::class);
       	$this->call(UserPhotoGalleryTableSeeder::class);
        $this->call(PostMainImagesTableSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(EventsTableSeeder::class);
    }
}
