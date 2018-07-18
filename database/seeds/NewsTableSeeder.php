<?php

use Illuminate\Database\Seeder;
use App\Models\News\News;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $news1 = News::create([
        	'name' => 'News #1',
        	'text' => 'Text for News #1',
        	'main_image_id' => '1',
        	'user_id' => '1'
        ]);

        $news2 = News::create([
        	'name' => 'News #2',
        	'text' => 'Text for News #2',
        	'main_image_id' => '2',
        	'user_id' => '3'
        ]);

        $news3 = News::create([
        	'name' => 'News #3',
        	'text' => 'Text for News #3',
        	'main_image_id' => '5',
        	'user_id' => '1'
        ]);
    }
}
