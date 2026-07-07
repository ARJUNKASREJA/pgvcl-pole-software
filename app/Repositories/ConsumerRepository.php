<?php

namespace App\Repositories;

use App\Models\Consumer;

class ConsumerRepository
{
    public function all()
    {
        return Consumer::with([
            'project',
            'pole'
        ])
        ->latest()
        ->paginate(20);
    }

    public function create(array $data)
    {
        return Consumer::create($data);
    }

    public function update(
        Consumer $consumer,
        array $data
    )
    {
        return $consumer->update($data);
    }

    public function delete(
        Consumer $consumer
    )
    {
        return $consumer->delete();
    }
}