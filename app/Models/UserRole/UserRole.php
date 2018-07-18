<?php

namespace App\Models\UserRole;

use Illuminate\Database\Eloquent\Model;
use App\Models\User\User;

class UserRole extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    public function users() {
        return $this->belongsToMany(User::class, 'user_has_role', 'user_role_id', 'user_id');
    }
}
