<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreConsumerRequest;
use App\Http\Requests\UpdateConsumerRequest;
use App\Models\Consumer;
use App\Models\Pole;
use App\Models\Project;
use App\Services\ConsumerService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ConsumerController extends Controller
{
    public function __construct(
        protected ConsumerService $service
    ) {
    }

    public function index(Request $request): View
    {
        $filters = [
            'search' => $request->input('search'),
            'project_id' => $request->input('project_id'),
            'pole_id' => $request->input('pole_id'),
            'status' => $request->input('status'),
            'sort_by' => $request->input('sort_by', 'created_at'),
            'sort_direction' => $request->input('sort_direction', 'desc'),
        ];

        $projects = Project::orderBy('project_name')->get();
        $poles = Pole::orderBy('pole_no')->get();
        $consumers = $this->service->list($filters);

        return view('consumers.index', compact('consumers', 'projects', 'poles', 'filters'));
    }

    public function create(): View
    {
        $projects = Project::orderBy('project_name')->get();
        $poles = Pole::orderBy('pole_no')->get();

        return view('consumers.create', compact('projects', 'poles'));
    }

    public function store(StoreConsumerRequest $request)
    {
        $this->service->store($request->validated());

        return redirect()->route('consumers.index')
            ->with('success', 'Consumer created successfully.');
    }

    public function show(Consumer $consumer): View
    {
        return view('consumers.show', compact('consumer'));
    }

    public function edit(Consumer $consumer): View
    {
        $projects = Project::orderBy('project_name')->get();
        $poles = Pole::orderBy('pole_no')->get();

        return view('consumers.edit', compact('consumer', 'projects', 'poles'));
    }

    public function update(UpdateConsumerRequest $request, Consumer $consumer)
    {
        $this->service->update($consumer, $request->validated());

        return redirect()->route('consumers.index')
            ->with('success', 'Consumer updated successfully.');
    }

    public function destroy(Consumer $consumer)
    {
        $this->service->delete($consumer);

        return redirect()->route('consumers.index')
            ->with('success', 'Consumer deleted successfully.');
    }
}