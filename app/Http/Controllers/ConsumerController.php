<?php

namespace App\Http\Controllers;

use App\Models\Pole;
use App\Models\Project;
use App\Models\Consumer;
use Illuminate\Http\Request;
use App\Services\ConsumerService;
use App\Http\Requests\StoreConsumerRequest;
use App\Http\Requests\UpdateConsumerRequest;

class ConsumerController extends Controller
{
    public function __construct(
        protected ConsumerService $service
    ){}

    public function index(Request $request)
    {
        $search=$request->search;

        $consumers=Consumer::with(['project','pole'])

        ->when($search,function($q) use($search){

            $q->where('consumer_no','like',"%{$search}%")

            ->orWhere('consumer_name','like',"%{$search}%");

        })

        ->latest()

        ->paginate(20);

        return view('consumers.index',compact('consumers','search'));
    }

    public function create()
    {
        $projects=Project::orderBy('project_name')->get();

        $poles=Pole::orderBy('pole_no')->get();

        return view('consumers.create',compact('projects','poles'));
    }

    public function store(StoreConsumerRequest $request)
    {
        $this->service->store($request->validated());

        return redirect()->route('consumers.index')

        ->with('success','Consumer Created Successfully');
    }

    public function show(Consumer $consumer)
    {
        return view('consumers.show',compact('consumer'));
    }

    public function edit(Consumer $consumer)
    {
        $projects=Project::all();

        $poles=Pole::all();

        return view('consumers.edit',compact(
            'consumer',
            'projects',
            'poles'
        ));
    }

    public function update(
        UpdateConsumerRequest $request,
        Consumer $consumer
    ){

        $this->service->update(
            $consumer,
            $request->validated()
        );

        return redirect()->route('consumers.index')

        ->with('success','Consumer Updated');
    }

    public function destroy(
        Consumer $consumer
    ){
        $this->service->delete($consumer);

        return redirect()->route('consumers.index')

        ->with('success','Consumer Deleted');
    }
}