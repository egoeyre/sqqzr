<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Choice;

class ChoicePolicy extends Policy
{
    public function update(User $user, Choice $choice)
    {
        return $user->isAuthorOf($choice);
    }

    public function destroy(User $user, Choice $choice)
    {
         return $user->isAuthorOf($choice);
    }
}
