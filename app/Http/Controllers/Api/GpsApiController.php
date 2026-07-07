<?php

namespace App\Http\Controllers\Api;

use App\Models\GpsLocation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GpsApiController extends Controller
{
    public function index()
    {
        return GpsLocation::paginate(20);
    }

    public function show(
        GpsLocation $gp
    ){
        return $gp;
    }

    public function store(Request $request)
    {
        return GpsLocation::create(
            $request->all()
        );
    }

    public function update(
        Request $request,
        GpsLocation $gp
    ){
        $gp->update(
            $request->all()
        );

        return $gp;
    }

    public function destroy(
        GpsLocation $gp
    ){
        $gp->delete();

        return response()->json([
            'success'=>true
        ]);
    }
}