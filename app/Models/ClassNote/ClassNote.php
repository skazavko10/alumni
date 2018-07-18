<?php

namespace App\Models\ClassNote;

use Illuminate\Database\Eloquent\Model;
use App\Models\User\User;

class ClassNote extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'name', 'text',
    ];

    public function author() {
    	return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
