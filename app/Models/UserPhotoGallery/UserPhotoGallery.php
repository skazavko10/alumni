<?php

namespace App\Models\UserPhotoGallery;

use Illuminate\Database\Eloquent\Model;
use App\Models\User\User;

class UserPhotoGallery extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'photo_path', 'post_date',
    ];

    protected $table = 'user_photo_galery';

    public function user() {
    	return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
