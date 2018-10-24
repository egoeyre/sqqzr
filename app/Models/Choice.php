<?php

namespace App\Models;

class Choice extends Model
{
    protected $fillable = ['user_id', 'category_id', 'title', 'optiona', 'optionb', 'optionc', 'optiond', 'answer'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
