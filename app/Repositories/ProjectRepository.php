<?php

namespace App\Repositories;

use App\Models\Project;

class ProjectRepository
{
    public function all()
    {
        return Project::latest()->paginate(20);
    }

    public function active()
    {
        return Project::where('status', 1)
            ->orderBy('project_name')
            ->get();
    }

    public function find(int $id)
    {
        return Project::findOrFail($id);
    }

    public function create(array $data)
    {
        return Project::create($data);
    }

    public function update(int $id, array $data)
    {
        $project = Project::findOrFail($id);

        $project->update($data);

        return $project;
    }

    public function delete(int $id): bool
    {
        return Project::findOrFail($id)->delete();
    }

    public function total(): int
    {
        return Project::count();
    }

    public function activeCount(): int
    {
        return Project::where('status', 1)->count();
    }

    public function inactiveCount(): int
    {
        return Project::where('status', 0)->count();
    }

    public function exists(string $projectCode): bool
    {
        return Project::where('project_code', $projectCode)->exists();
    }

    public function search(?string $keyword)
    {
        return Project::where('project_name', 'like', "%{$keyword}%")
            ->orWhere('project_code', 'like', "%{$keyword}%")
            ->orWhere('division', 'like', "%{$keyword}%")
            ->orWhere('subdivision', 'like', "%{$keyword}%")
            ->paginate(20);
    }
}