<?php

namespace App\Models;

class Question extends Model
{
    protected $fillable = ['category_id', 'title', 'answer'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
