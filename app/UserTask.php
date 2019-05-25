<?php

namespace App;

use App\Models\Task;
use Illuminate\Database\Eloquent\Model;

class UserTask extends Model
{
    protected $table = 'user_tasks';
    protected $guarded = ['*'];

    public function question()
    {
        return $this->hasOne(Task::class,'id','question_id');
    }
}
