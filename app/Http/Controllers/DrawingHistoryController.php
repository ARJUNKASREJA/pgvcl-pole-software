<?php

namespace App\Http\Controllers;

use App\Models\DrawingHistory;
use App\Services\DrawingHistoryService;

class DrawingHistoryController extends Controller
{
    public function __construct(
        protected DrawingHistoryService $service
    ){}

    public function index()
    {
        return view(
            'drawing-history.index',
            [
                'histories'=>$this->service->all()
            ]
        );
    }

    public function show(
        DrawingHistory $history
    ){
        return response()->json(
            $history
        );
    }
}