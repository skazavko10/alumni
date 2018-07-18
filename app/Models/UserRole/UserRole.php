<?php

namespace App\Models\UserRole;

use Illuminate\Database\Eloquent\Model;
use App\Models\UserHasRole\UserHasRole;

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

    public function hasUsers() {
    	return $this->hasMany(UserHasRole::class, 'user_role_id', 'id');
    }
}
