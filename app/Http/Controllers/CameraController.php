<?php

namespace App\Http\Controllers;

use App\Models\Pole;
use App\Models\Project;
use App\Models\CameraPhoto;
use App\Services\CameraService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreCameraRequest;
use App\Http\Requests\UpdateCameraRequest;

class CameraController extends Controller
{
    public function __construct(
        protected CameraService $service
    ) {}

    public function index(Request $request)
    {
        $search = $request->search;

        $photos = CameraPhoto::with([
            'project',
            'pole',
            'gps',
            'user'
        ])
        ->when($search,function($q) use($search){

            $q->whereHas('pole',function($qq) use($search){

                $qq->where('pole_no','like',"%{$search}%");

            });

        })
        ->latest()
        ->paginate(20);

        return view('camera.index',compact(
            'photos',
            'search'
        ));
    }

    public function create()
    {
        return view('camera.create',[
            'projects'=>Project::all(),
            'poles'=>Pole::all(),
            'photo'=>new CameraPhoto(),
        ]);
    }

    public function store(StoreCameraRequest $request)
    {
        $data=$request->validated();

        if($request->hasFile('photo')){
            $data['photo']=$request
            ->file('photo')
            ->store('camera','public');
        }

        $data['captured_by']=Auth::id();

        $this->service->store($data);

        return redirect()
        ->route('camera.index')
        ->with('success','Photo Uploaded');
    }

    public function show(CameraPhoto $camera)
    {
        return view('camera.show',[
            'photo'=>$camera
        ]);
    }

    public function edit(CameraPhoto $camera)
    {
        return view('camera.edit',[
            'photo'=>$camera,
            'projects'=>Project::all(),
            'poles'=>Pole::all(),
        ]);
    }

    public function update(
        UpdateCameraRequest $request,
        CameraPhoto $camera
    ){
        $data=$request->validated();

        if($request->hasFile('photo')){
            $data['photo']=$request
            ->file('photo')
            ->store('camera','public');
        }

        $this->service->update(
            $camera,
            $data
        );

        return redirect()
        ->route('camera.index')
        ->with('success','Updated');
    }

    public function destroy(CameraPhoto $camera)
    {
        $this->service->delete($camera);

        return back()
        ->with('success','Deleted');
    }
}