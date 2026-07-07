<?php

namespace App\Services;

use App\Models\Consumer;
use App\Repositories\ConsumerRepository;

class ConsumerService
{
    public function __construct(
        protected ConsumerRepository $repository
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
        Consumer $consumer,
        array $data
    )
    {
        return $this->repository->update(
            $consumer,
            $data
        );
    }

    public function delete(
        Consumer $consumer
    )
    {
        return $this->repository->delete(
            $consumer
        );
    }
}