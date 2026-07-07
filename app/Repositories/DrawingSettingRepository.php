<?php

namespace App\Repositories;

use App\Models\DrawingSetting;

class DrawingSettingRepository
{
    public function first()
    {
        return DrawingSetting::first();
    }

    public function update(array $data)
    {
        $setting = DrawingSetting::first();

        return $setting->update($data);
    }
}