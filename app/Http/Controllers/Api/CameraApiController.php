<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\CameraPhoto;
use App\Http\Controllers\Controller;

class CameraApiController extends Controller
{
    public function index()
    {
        return CameraPhoto::paginate(20);
    }

    public function show(
        CameraPhoto $camera
    ){
        return $camera;
    }

    public function store(Request $request)
    {
        return CameraPhoto::create(
            $request->all()
        );
    }

    public function update(
        Request $request,
        CameraPhoto $camera
    ){
        $camera->update(
            $request->all()
        );

        return $camera;
    }

    public function destroy(
        CameraPhoto $camera
    ){
        $camera->delete();

        return response()->json([
            'success'=>true
        ]);
    }
}