<?php

namespace App\Services;

use App\Repositories\DrawingHistoryRepository;

class DrawingHistoryService
{
    public function __construct(
        protected DrawingHistoryRepository $repository
    ){}

    public function all()
    {
        return $this->repository->all();
    }

    public function create(
        array $data
    ){
        return $this->repository->create(
            $data
        );
    }
}