<?php

namespace App\Http\Controllers;

use App\Services\DrawingSettingService;
use Illuminate\Http\Request;

class DrawingSettingController extends Controller
{
    public function __construct(
        protected DrawingSettingService $service
    ){}

    public function edit()
    {
        return view(
            'drawing-settings.edit',
            [
                'setting'=>$this->service->get()
            ]
        );
    }

    public function update(Request $request)
    {
        $this->service->update(
            $request->all()
        );

        return back()->with(
            'success',
            'Settings Updated'
        );
    }
}