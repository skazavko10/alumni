<?php

namespace App\Models\User;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\UserHasRole\UserHasRole;
use App\Models\ClassNote\ClassNote;
use App\Models\UserPhotoGallery\UserPhotoGallery;
use App\Models\News\News;
use App\Models\Event\Event;
use App\Models\UserRole\UserRole;

class User extends Authenticatable
{
    use \Illuminate\Notifications\Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles() {
        return $this->belongsToMany(UserRole::class, 'user_has_role', 'user_id', 'user_role_id');
    }

    public function classNotes() {
        return $this->hasMany(ClassNote::class, 'user_id', 'id');
    }

    public function photoGalery() {
        return $this->hasMany(UserPhotoGallery::class, 'user_id', 'id');
    }

    public function news() {
        return $this->hasMany(News::class, 'user_id', 'id');
    }

    public function events() {
        return $this->hasMany(Event::class, 'user_id', 'id');
    }
}
