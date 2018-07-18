<?php

namespace App\Models\PostMainImage;

use Illuminate\Database\Eloquent\Model;
use App\Models\News\News;
use App\Models\Event\Event;

class PostMainImage extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'photo_url',
    ];

    public function news() {
    	return $this->hasOne(News::class, 'main_image_id', 'id');
    }

    public function event() {
    	return $this->hasOne(Event::class, 'main_image_id', 'id');
    }
}
