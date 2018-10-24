<?php

namespace App\Models;

class Choice extends Model
{
    protected $fillable = ['user_id', 'category_id', 'title', 'optiona', 'optionb', 'optionc', 'optiond', 'answer'];
}
