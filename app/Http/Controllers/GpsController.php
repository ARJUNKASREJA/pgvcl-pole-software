<?php

namespace App\Http\Controllers;

use App\Models\Pole;
use App\Models\Project;
use App\Models\GpsLocation;
use Illuminate\Http\Request;
use App\Services\GpsService;
use App\Http\Requests\StoreGpsRequest;
use App\Http\Requests\UpdateGpsRequest;

class GpsController extends Controller
{
    public function __construct(
        protected GpsService $service
    ){}

    public function index(Request $request)
    {
        $search = $request->search;

        $locations = GpsLocation::with([
            'project',
            'pole',
            'user'
        ])
        ->when($search,function($q) use($search){

            $q->whereHas('pole',function($query) use($search){

                $query->where(
                    'pole_no',
                    'like',
                    "%{$search}%"
                );

            });

        })
        ->latest()
        ->paginate(20);

        return view(
            'gps.index',
            compact(
                'locations',
                'search'
            )
        );
    }

    public function create()
    {
        return view(
            'gps.create',
            [
                'projects'=>Project::all(),
                'poles'=>Pole::all(),
            ]
        );
    }

    public function store(StoreGpsRequest $request)
    {
        $this->service->store(
            $request->validated()
        );

        return redirect()
            ->route('gps.index')
            ->with(
                'success',
                'GPS Saved Successfully'
            );
    }

    public function show(
        GpsLocation $gp
    ){
        return view(
            'gps.show',
            [
                'gps'=>$gp
            ]
        );
    }

    public function edit(
        GpsLocation $gp
    ){
        return view(
            'gps.edit',
            [
                'gps'=>$gp,
                'projects'=>Project::all(),
                'poles'=>Pole::all(),
            ]
        );
    }

    public function update(
        UpdateGpsRequest $request,
        GpsLocation $gp
    ){

        $this->service->update(
            $gp,
            $request->validated()
        );

        return redirect()
            ->route('gps.index')
            ->with(
                'success',
                'GPS Updated'
            );

    }

    public function destroy(
        GpsLocation $gp
    ){

        $this->service->delete($gp);

        return back()
            ->with(
                'success',
                'GPS Deleted'
            );

    }
}