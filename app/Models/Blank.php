<?php

namespace App\Models;

class Blank extends Model
{
    protected $fillable = ['user_id', 'category_id', 'title', 'answer', 'amount'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
