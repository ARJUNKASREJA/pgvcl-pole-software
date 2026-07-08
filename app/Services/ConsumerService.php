<?php

namespace App\Services;

use App\Models\Consumer;
use App\Repositories\ConsumerRepository;
use Illuminate\Pagination\LengthAwarePaginator;

class ConsumerService
{
    public function __construct(
        protected ConsumerRepository $repository
    ) {}

    public function list(array $filters = []): LengthAwarePaginator
    {
        return $this->repository->search($filters);
    }

    public function store(array $data): Consumer
    {
        return $this->repository->create($data);
    }

    public function update(Consumer $consumer, array $data): bool
    {
        return $this->repository->update($consumer, $data);
    }

    public function delete(Consumer $consumer): bool
    {
        return $this->repository->delete($consumer);
    }
}