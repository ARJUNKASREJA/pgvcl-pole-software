<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $query = Project::query();

        if ($request->filled('search')) {
            $query->where('project_name', 'like', '%' . $request->search . '%')
                  ->orWhere('project_code', 'like', '%' . $request->search . '%')
                  ->orWhere('village', 'like', '%' . $request->search . '%')
                  ->orWhere('feeder', 'like', '%' . $request->search . '%');
        }

        $projects = $query->latest()->paginate(10);

        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'project_name' => 'required|max:255',
            'division'     => 'required|max:255',
            'subdivision'  => 'required|max:255',
            'village'      => 'required|max:255',
            'feeder'       => 'required|max:255',
            'dtc'          => 'required|max:255',
            'description'  => 'nullable',
        ]);

        Project::create([
            'project_name' => $request->project_name,
            'project_code' => 'PRJ-' . date('YmdHis'),
            'division'     => $request->division,
            'subdivision'  => $request->subdivision,
            'village'      => $request->village,
            'feeder'       => $request->feeder,
            'dtc'          => $request->dtc,
            'description'  => $request->description,
            'status'       => 1,
        ]);

        return redirect()
            ->route('projects.index')
            ->with('success', 'Project Created Successfully.');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'project_name' => 'required|max:255',
            'division'     => 'required|max:255',
            'subdivision'  => 'required|max:255',
            'village'      => 'required|max:255',
            'feeder'       => 'required|max:255',
            'dtc'          => 'required|max:255',
        ]);

        $project->update($request->all());

        return redirect()
            ->route('projects.index')
            ->with('success', 'Project Updated Successfully.');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()
            ->route('projects.index')
            ->with('success', 'Project Deleted Successfully.');
    }
}