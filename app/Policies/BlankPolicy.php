<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Blank;

class BlankPolicy extends Policy
{
    public function update(User $user, Blank $blank)
    {
        // return $blank->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Blank $blank)
    {
        return true;
    }
}
