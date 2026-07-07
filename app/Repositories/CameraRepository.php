<?php

namespace App\Repositories;

use App\Models\CameraPhoto;

class CameraRepository
{
    public function all()
    {
        return CameraPhoto::with([
            'project',
            'pole',
            'gps',
            'user'
        ])->latest()->paginate(20);
    }

    public function create(array $data)
    {
        return CameraPhoto::create($data);
    }

    public function update(
        CameraPhoto $photo,
        array $data
    ){
        $photo->update($data);

        return $photo;
    }

    public function delete(CameraPhoto $photo)
    {
        return $photo->delete();
    }
}