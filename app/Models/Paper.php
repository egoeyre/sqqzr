<?php

namespace App\Models;

class Paper extends Model
{
    protected $fillable = ['title', 'category_id', 'choice_amount', 'choice_score', 'blank_amount', 'blank_score', 'question_amount', 'question_score', 'paper_address', 'answer_address'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function bcategory()
    {
        return $this->belongsTo(Bcategory::class);
    }

    public function qcategory()
    {
        return $this->belongsTo(Qcategory::class);
    }

}
