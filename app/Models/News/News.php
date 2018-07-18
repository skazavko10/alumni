<?php

namespace App\Models\News;

use Illuminate\Database\Eloquent\Model;
use App\Models\User\User;
use App\Models\PostMainImage\PostMainImage;

class News extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'text', 'main_image_id', 'user_id',
    ];

    public function author() {
    	return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function mainImage() {
    	return $this->belongsTo(PostMainImage::class, 'main_image_id', 'id');
    }
}
