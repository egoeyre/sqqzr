<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Blank;

class BlankPolicy extends Policy
{
    public function update(User $user, Blank $blank)
    {
        return $user->isAuthorOf($blank);
    }

    public function destroy(User $user, Blank $blank)
    {
        return $user->isAuthorOf($blank);
    }
}
