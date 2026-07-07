<?php

namespace App\Http\Controllers\Api;

use App\Models\Pole;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PoleApiController extends Controller
{
    public function index()
    {
        return Pole::paginate(20);
    }

    public function show(Pole $pole)
    {
        return $pole;
    }

    public function store(Request $request)
    {
        return Pole::create(
            $request->all()
        );
    }

    public function update(
        Request $request,
        Pole $pole
    ){
        $pole->update(
            $request->all()
        );

        return $pole;
    }

    public function destroy(Pole $pole)
    {
        $pole->delete();

        return response()->json([
            'success'=>true
        ]);
    }
}