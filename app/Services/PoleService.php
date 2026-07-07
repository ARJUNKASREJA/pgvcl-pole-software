<?php

namespace App\Services;

use App\Models\Pole;
use App\Repositories\PoleRepository;

class PoleService
{
    public function __construct(
        protected PoleRepository $repository
    ) {
    }

    public function all()
    {
        return $this->repository->all();
    }

    public function store(array $data): Pole
    {
        return $this->repository->create($data);
    }

    public function update(
        Pole $pole,
        array $data
    )
    {
        return $this->repository->update(
            $pole,
            $data
        );
    }

    public function delete(Pole $pole)
    {
        return $this->repository->delete($pole);
    }
}
