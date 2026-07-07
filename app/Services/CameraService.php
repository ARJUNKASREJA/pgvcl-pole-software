<?php

namespace App\Services;

use App\Models\CameraPhoto;
use App\Repositories\CameraRepository;

class CameraService
{
    public function __construct(
        protected CameraRepository $repository
    ){}

    public function list()
    {
        return $this->repository->all();
    }

    public function store(array $data)
    {
        return $this->repository->create($data);
    }

    public function update(
        CameraPhoto $photo,
        array $data
    ){
        return $this->repository->update(
            $photo,
            $data
        );
    }

    public function delete(
        CameraPhoto $photo
    ){
        return $this->repository->delete(
            $photo
        );
    }
}