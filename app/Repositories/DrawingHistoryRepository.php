<?php

namespace App\Repositories;

use App\Models\DrawingHistory;

class DrawingHistoryRepository
{
    public function all()
    {
        return DrawingHistory::with([
            'drawing',
            'user'
        ])
        ->latest()
        ->paginate(20);
    }

    public function create(
        array $data
    ){
        return DrawingHistory::create(
            $data
        );
    }
}