<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'questions';

    public function subject() {
        return $this->belongsTo(Subject::class);
    }
}