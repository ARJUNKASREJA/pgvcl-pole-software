<?php

namespace App\Repositories;

use App\Models\Pole;

class PoleRepository
{
    public function all()
    {
        return Pole::latest()->get();
    }

    public function create(array $data)
    {
        return Pole::create($data);
    }

    public function update(
        Pole $pole,
        array $data
    )
    {
        return $pole->update($data);
    }

    public function delete(Pole $pole)
    {
        return $pole->delete();
    }
}