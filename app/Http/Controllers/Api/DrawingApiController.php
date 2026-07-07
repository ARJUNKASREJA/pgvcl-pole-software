<?php

namespace App\Http\Controllers\Api;

use App\Models\Drawing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DrawingApiController extends Controller
{
    public function index()
    {
        return Drawing::with([
            'project',
            'pole'
        ])->paginate(20);
    }

    public function show(Drawing $drawing)
    {
        return $drawing;
    }

    public function store(Request $request)
    {
        return Drawing::create(
            $request->all()
        );
    }

    public function update(
        Request $request,
        Drawing $drawing
    ){
        $drawing->update(
            $request->all()
        );

        return $drawing;
    }

    public function destroy(
        Drawing $drawing
    ){
        $drawing->delete();

        return response()->json([
            'success'=>true
        ]);
    }
}