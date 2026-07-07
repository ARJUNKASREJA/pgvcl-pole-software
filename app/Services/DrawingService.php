<?php

namespace App\Services;

use App\Models\Drawing;
use App\Repositories\DrawingRepository;

class DrawingService
{
    public function __construct(
        protected DrawingRepository $repository
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
        Drawing $drawing,
        array $data
    ){
        return $this->repository->update(
            $drawing,
            $data
        );
    }

    public function delete(
        Drawing $drawing
    ){
        return $this->repository->delete(
            $drawing
        );
    }
}