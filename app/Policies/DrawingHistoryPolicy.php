<?php

namespace App\Policies;

use App\Models\User;
use App\Models\DrawingHistory;

class DrawingHistoryPolicy
{
    public function viewAny(User $user)
    {
        return true;
    }

    public function view(
        User $user,
        DrawingHistory $history
    ){
        return true;
    }

    public function create(User $user)
    {
        return true;
    }
}