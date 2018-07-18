<?php

namespace App\Models\UserHasRole;

use Illuminate\Database\Eloquent\Model;
use App\Models\User\User;
use App\Models\UserRole\UserRole;

class UserHasRole extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'user_role_id',
    ];

    protected $table = 'user_has_role';

    public function user() {
    	return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function userType() {
    	return $this->belongsTo(UserRole::class, 'user_role_id', 'id');	
    }
}
