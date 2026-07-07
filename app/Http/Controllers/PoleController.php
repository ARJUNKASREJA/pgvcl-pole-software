<?php

namespace App\Http\Controllers;

use App\Models\Pole;
use App\Models\Project;
use App\Services\PoleService;
use App\Http\Requests\StorePoleRequest;
use App\Http\Requests\UpdatePoleRequest;
use Illuminate\Http\Request;

class PoleController extends Controller
{
    public function __construct(
        protected PoleService $service
    ) {
    }

    public function index(Request $request)
    {
        $search = $request->search;

        $poles = Pole::with('project')

            ->when($search,function($q) use($search){

                $q->where('pole_no','like',"%{$search}%")

                ->orWhere('pole_type','like',"%{$search}%");

            })

            ->latest()

            ->paginate(20);

        return view('poles.index',compact('poles','search'));
    }

    public function create()
    {
        $projects=Project::orderBy('project_name')->get();

        return view('poles.create',compact('projects'));
    }

    public function store(StorePoleRequest $request)
    {
        $this->service->store($request->validated());

        return redirect()

            ->route('poles.index')

            ->with('success','Pole Created Successfully');
    }

    public function show(Pole $pole)
    {
        return view('poles.show',compact('pole'));
    }

    public function edit(Pole $pole)
    {
        $projects=Project::orderBy('project_name')->get();

        return view('poles.edit',compact('pole','projects'));
    }

    public function update(
        UpdatePoleRequest $request,
        Pole $pole
    )
    {
        $this->service->update($pole,$request->validated());

        return redirect()

            ->route('poles.index')

            ->with('success','Pole Updated Successfully');
    }

    public function destroy(Pole $pole)
    {
        $this->service->delete($pole);

        return redirect()

            ->route('poles.index')

            ->with('success','Pole Deleted Successfully');
    }
}