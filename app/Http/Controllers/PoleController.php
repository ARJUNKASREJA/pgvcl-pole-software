<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePoleRequest;
use App\Http\Requests\UpdatePoleRequest;
use App\Models\Pole;
use App\Models\Project;
use App\Services\PoleService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PoleController extends Controller
{
    public function __construct(
        protected PoleService $service
    ) {
    }

    public function index(Request $request): View
    {
        $filters = [
            'search' => $request->input('search'),
            'project_id' => $request->input('project_id'),
            'status' => $request->input('status'),
            'sort_by' => $request->input('sort_by', 'created_at'),
            'sort_direction' => $request->input('sort_direction', 'desc'),
        ];

        $projects = Project::orderBy('project_name')->get();
        $poles = $this->service->list($filters);

        return view('poles.index', compact('poles', 'projects', 'filters'));
    }

    public function create(): View
    {
        $projects = Project::orderBy('project_name')->get();

        return view('poles.create', compact('projects'));
    }

    public function store(StorePoleRequest $request)
    {
        $this->service->store($request->validated());

        return redirect()
            ->route('poles.index')
            ->with('success', 'Pole created successfully.');
    }

    public function show(Pole $pole): View
    {
        return view('poles.show', compact('pole'));
    }

    public function edit(Pole $pole): View
    {
        $projects = Project::orderBy('project_name')->get();

        return view('poles.edit', compact('pole', 'projects'));
    }

    public function update(UpdatePoleRequest $request, Pole $pole)
    {
        $this->service->update($pole, $request->validated());

        return redirect()
            ->route('poles.index')
            ->with('success', 'Pole updated successfully.');
    }

    public function destroy(Pole $pole)
    {
        $this->service->delete($pole);

        return redirect()
            ->route('poles.index')
            ->with('success', 'Pole deleted successfully.');
    }
}