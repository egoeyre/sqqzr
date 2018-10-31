<?php

namespace App\Models;

class Blank extends Model
{
    protected $fillable = ['bcategory_id', 'title', 'answer', 'amount'];

    public function bcategory()
    {
        return $this->belongsTo(Bcategory::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
