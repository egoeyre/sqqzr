<?php

namespace App\Models;

class Topic extends Model
{
    protected $fillable = ['title', 'body', 'user_id', 'tcategory_id', 'reply_count', 'view_count', 'last_reply_user_id', 'order', 'excerpt', 'slug'];
    public function tcategory()
    {
        return $this->belongsTo(Tcategory::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
