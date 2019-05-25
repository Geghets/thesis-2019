<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    protected $guarded = ['*'];

    public function users()
    {
        return $this->hasMany(User::class,'group_id');
    }
}
