<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model {

    protected $casts = [
        'result' => 'boolean'
    ];

    protected $guarded = ['*'];

    public function question()
    {
        return $this->belongsTo(Task::class);
    }
}
