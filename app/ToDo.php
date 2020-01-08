<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ToDo extends Model
{
    //
    protected $primaryKey = 'todo_id';
    protected $fillable = ['title','message','date'];
}
