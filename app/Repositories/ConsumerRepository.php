<?php

namespace App\Repositories;

use App\Models\Consumer;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;

class ConsumerRepository
{
    public function query(): Builder
    {
        return Consumer::query()->with(['project', 'pole']);
    }

    public function all(): LengthAwarePaginator
    {
        return $this->query()->latest()->paginate(20);
    }

    public function search(array $filters = []): LengthAwarePaginator
    {
        $query = $this->query();

        if (! empty($filters['search'])) {
            $search = trim($filters['search']);

            $query->where(function ($q) use ($search): void {
                $q->where('consumer_no', 'like', "%{$search}%")
                    ->orWhere('consumer_name', 'like', "%{$search}%")
                    ->orWhere('meter_no', 'like', "%{$search}%")
                    ->orWhere('mobile', 'like', "%{$search}%")
                    ->orWhere('phase', 'like', "%{$search}%")
                    ->orWhere('connection_type', 'like', "%{$search}%")
                    ->orWhereHas('project', function ($projectQuery) use ($search): void {
                        $projectQuery->where('project_name', 'like', "%{$search}%")
                            ->orWhere('project_code', 'like', "%{$search}%");
                    })
                    ->orWhereHas('pole', function ($poleQuery) use ($search): void {
                        $poleQuery->where('pole_no', 'like', "%{$search}%");
                    });
            });
        }

        if (! empty($filters['project_id'])) {
            $query->where('project_id', $filters['project_id']);
        }

        if (! empty($filters['pole_id'])) {
            $query->where('pole_id', $filters['pole_id']);
        }

        if (array_key_exists('status', $filters) && $filters['status'] !== '') {
            $query->where('status', (bool) $filters['status']);
        }

        if (! empty($filters['sort_by']) && ! empty($filters['sort_direction'])) {
            $query->orderBy($filters['sort_by'], $filters['sort_direction']);
        } else {
            $query->latest();
        }

        return $query->paginate(20)->appends($filters);
    }

    public function create(array $data): Consumer
    {
        return Consumer::create($data);
    }

    public function update(Consumer $consumer, array $data): bool
    {
        return $consumer->update($data);
    }

    public function delete(Consumer $consumer): bool
    {
        return $consumer->delete();
    }
}