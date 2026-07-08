<?php

namespace App\Repositories;

use App\Models\Pole;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;

class PoleRepository
{
    public function query(): Builder
    {
        return Pole::query()->with(['project', 'surveySheet', 'consumer']);
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
                $q->where('pole_no', 'like', "%{$search}%")
                    ->orWhere('pole_type', 'like', "%{$search}%")
                    ->orWhere('village', 'like', "%{$search}%")
                    ->orWhere('feeder', 'like', "%{$search}%")
                    ->orWhereHas('project', function ($projectQuery) use ($search): void {
                        $projectQuery->where('project_name', 'like', "%{$search}%")
                            ->orWhere('project_code', 'like', "%{$search}%");
                    });
            });
        }

        if (! empty($filters['project_id'])) {
            $query->where('project_id', $filters['project_id']);
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

    public function create(array $data): Pole
    {
        return Pole::create($data);
    }

    public function update(Pole $pole, array $data): bool
    {
        return $pole->update($data);
    }

    public function delete(Pole $pole): bool
    {
        return $pole->delete();
    }
}