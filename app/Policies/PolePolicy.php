<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Pole;

class PolePolicy
{
    public function viewAny(User $user)
    {
        return true;
    }

    public function view(User $user,Pole $pole)
    {
        return true;
    }

    public function create(User $user)
    {
        return true;
    }

    public function update(User $user,Pole $pole)
    {
        return true;
    }

    public function delete(User $user,Pole $pole)
    {
        return true;
    }
}