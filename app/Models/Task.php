<?php


namespace App\Models;


use App\UserTask;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'questions';
    protected $guarded = ['*'];

    public function subject() {
        return $this->belongsTo(Subject::class);
    }

    public function group()
    {
        return $this->belongsTo(Groups::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class,'question_id','id');
    }

    public function taskSent()
    {
        return $this->hasMany(UserTask::class,'question_id');
    }

}
