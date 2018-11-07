<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Paper;

class PaperPolicy extends Policy
{
    public function destroy(User $user, Paper $paper)
    {
        return $user->isAuthorOf($paper);
    }
}
