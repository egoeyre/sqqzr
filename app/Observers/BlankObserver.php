<?php

namespace App\Observers;

use App\Models\Blank;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class BlankObserver
{
    public function saving(Blank $blank)
    {
        $blank->title = clean($blank->title, 'user_blank_title');

    }

}