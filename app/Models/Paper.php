<?php

namespace App\Models;

class Paper extends Model
{
    protected $fillable = ['title', 'user_id', 'category_id', 'choice_amount', 'choice_score', 'bcategory_id', 'blank_amount', 'blank_score', 'qcategory_id', 'question_amount', 'question_score', 'paper_address', 'answer_address'];

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
