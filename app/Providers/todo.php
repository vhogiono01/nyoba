<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $primaryKey = 'id_todo';

    protected $fillable = [
    	'item'
    ];
}