<?php

use Illuminate\Database\Seeder;
use App\Models\PostMainImage\PostMainImage;

class PostMainImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	$postMainImage1 = PostMainImage::create([
       		'photo_url' => 'blog-featured-image.jpg'
       	]);

       	$postMainImage2 = PostMainImage::create([
       		'photo_url' => 'guest-post.png'
       	]);

       	$postMainImage3 = PostMainImage::create([
       		'photo_url' => 'lobp-web-01.jpg'
       	]);

       	$postMainImage4 = PostMainImage::create([
       		'photo_url' => 'rawpixel-com-600782-unsplash-768x580.jpg'
       	]);

       	$postMainImage5 = PostMainImage::create([
       		'photo_url' => 'write-guest-blog-post.jpg'
       	]);

       	$postMainImage6 = PostMainImage::create([
       		'photo_url' => 'writig-blog-post-guidelines.jpg'
       	]);
    }
}
