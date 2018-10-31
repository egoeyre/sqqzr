<?php

namespace App\Models;

class Question extends Model
{
    protected $fillable = ['qcategory_id', 'title', 'answer'];

    public function qcategory()
    {
        return $this->belongsTo(Qcategory::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
