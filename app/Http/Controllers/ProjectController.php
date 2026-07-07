<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Exports\ProjectsExport;
use App\Imports\ProjectsImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('user')->paginate(10);
        return view('projects.index', compact('projects'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Project::create([
            'name' => $request->name,
            'status' => 1,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }

    public function export()
    {
        return Excel::download(new ProjectsExport, 'projects_' . time() . '.xlsx');
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv',
        ]);

        Excel::import(new ProjectsImport, $request->file('file'));

        return redirect()->route('projects.index')->with('success', 'Projects imported successfully.');
    }
}