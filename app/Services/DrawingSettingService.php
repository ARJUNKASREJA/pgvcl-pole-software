<?php

namespace App\Services;

use App\Repositories\DrawingSettingRepository;

class DrawingSettingService
{
    public function __construct(
        protected DrawingSettingRepository $repository
    ){}

    public function get()
    {
        return $this->repository->first();
    }

    public function update(array $data)
    {
        return $this->repository->update($data);
    }
}