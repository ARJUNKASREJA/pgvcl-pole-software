<?php

namespace App\Policies;

use App\Models\User;
use App\Models\CameraPhoto;

class CameraPolicy
{
    public function viewAny(User $user)
    {
        return true;
    }

    public function view(User $user, CameraPhoto $photo)
    {
        return true;
    }

    public function create(User $user)
    {
        return true;
    }

    public function update(User $user, CameraPhoto $photo)
    {
        return true;
    }

    public function delete(User $user, CameraPhoto $photo)
    {
        return true;
    }
}