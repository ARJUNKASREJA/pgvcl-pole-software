<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Drawing;

class DrawingPolicy
{
    public function viewAny(User $user)
    {
        return true;
    }

    public function view(User $user, Drawing $drawing)
    {
        return true;
    }

    public function create(User $user)
    {
        return true;
    }

    public function update(User $user, Drawing $drawing)
    {
        return true;
    }

    public function delete(User $user, Drawing $drawing)
    {
        return true;
    }
}