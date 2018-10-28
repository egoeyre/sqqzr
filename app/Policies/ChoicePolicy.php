<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Choice;

class ChoicePolicy extends Policy
{
    public function update(User $user, Choice $choice)
    {
        return $choice->user_id == $user->id;
    }

    public function destroy(User $user, Choice $choice)
    {
        return true;
    }
}
