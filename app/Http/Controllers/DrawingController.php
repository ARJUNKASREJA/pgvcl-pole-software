<?php

namespace App\Http\Controllers;

use App\Models\Pole;
use App\Models\Project;
use App\Models\Drawing;
use Illuminate\Http\Request;
use App\Services\DrawingService;
use App\Http\Requests\StoreDrawingRequest;
use App\Http\Requests\UpdateDrawingRequest;

class DrawingController extends Controller
{
    public function __construct(
        protected DrawingService $service
    ){}

    public function index(Request $request)
    {
        $search = $request->search;

        $drawings = Drawing::with([
            'project',
            'pole'
        ])
        ->when($search,function($q) use($search){

            $q->where('drawing_no','like',"%{$search}%")

            ->orWhere('drawing_type','like',"%{$search}%");

        })
        ->latest()
        ->paginate(20);

        return view(
            'drawings.index',
            compact('drawings','search')
        );
    }

    public function create()
    {
        return view('drawings.create',[
            'projects'=>Project::all(),
            'poles'=>Pole::all(),
            'drawing'=>new Drawing(),
        ]);
    }

    public function store(StoreDrawingRequest $request)
    {
        $this->service->store(
            $request->validated()
        );

        return redirect()
        ->route('drawings.index')
        ->with(
            'success',
            'Drawing Created Successfully'
        );
    }

    public function show(Drawing $drawing)
    {
        return view(
            'drawings.show',
            compact('drawing')
        );
    }

    public function edit(Drawing $drawing)
    {
        return view('drawings.edit',[
            'drawing'=>$drawing,
            'projects'=>Project::all(),
            'poles'=>Pole::all(),
        ]);
    }

    public function update(
        UpdateDrawingRequest $request,
        Drawing $drawing
    ){
        $this->service->update(
            $drawing,
            $request->validated()
        );

        return redirect()
        ->route('drawings.index')
        ->with(
            'success',
            'Drawing Updated'
        );
    }

    public function destroy(Drawing $drawing)
    {
        $this->service->delete($drawing);

        return back()
        ->with(
            'success',
            'Drawing Deleted'
        );
    }
}