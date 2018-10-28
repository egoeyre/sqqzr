<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Question;

class QuestionPolicy extends Policy
{
    public function update(User $user, Question $question)
    {
         return $user->isAuthorOf($question);
    }

    public function destroy(User $user, Question $question)
    {
         return $user->isAuthorOf($question);
    }
}
