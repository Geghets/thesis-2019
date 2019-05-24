<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model {

    protected $casts = [
        'result' => 'boolean'
    ];

    public function question()
    {
        return $this->belongsTo(Task::class);
    }
}
