<?php

namespace App\Repositories;

use App\Models\Drawing;

class DrawingRepository
{
    public function all()
    {
        return Drawing::with([
            'project',
            'pole'
        ])
        ->latest()
        ->paginate(20);
    }

    public function create(array $data)
    {
        return Drawing::create($data);
    }

    public function update(
        Drawing $drawing,
        array $data
    ){
        $drawing->update($data);

        return $drawing;
    }

    public function delete(
        Drawing $drawing
    ){
        return $drawing->delete();
    }
}