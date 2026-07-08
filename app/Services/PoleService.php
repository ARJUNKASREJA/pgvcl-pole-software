<?php

namespace App\Services;

use App\Models\Pole;
use App\Repositories\PoleRepository;
use Illuminate\Pagination\LengthAwarePaginator;

class PoleService
{
    public function __construct(
        protected PoleRepository $repository
    ) {
    }

    public function list(array $filters = []): LengthAwarePaginator
    {
        return $this->repository->search($filters);
    }

    public function store(array $data): Pole
    {
        if (empty($data['pole_no'])) {
            $data['pole_no'] = Pole::generatePoleNumber();
        }

        return $this->repository->create($data);
    }

    public function update(Pole $pole, array $data): bool
    {
        return $this->repository->update($pole, $data);
    }

    public function delete(Pole $pole): bool
    {
        return $this->repository->delete($pole);
    }
}
