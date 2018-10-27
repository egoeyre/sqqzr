<?php

namespace App\Models;

class Question extends Model
{
    protected $fillable = ['user_id', 'category_id', 'title', 'anwser'];
}
