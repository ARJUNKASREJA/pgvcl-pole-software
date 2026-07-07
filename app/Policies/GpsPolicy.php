<?php

namespace App\Policies;

use App\Models\User;
use App\Models\GpsLocation;

class GpsPolicy
{
    public function viewAny(User $user)
    {
        return true;
    }

    public function view(User $user,GpsLocation $gps)
    {
        return true;
    }

    public function create(User $user)
    {
        return true;
    }

    public function update(User $user,GpsLocation $gps)
    {
        return true;
    }

    public function delete(User $user,GpsLocation $gps)
    {
        return true;
    }
}