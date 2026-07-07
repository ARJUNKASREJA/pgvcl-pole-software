<?php

namespace App\Providers;

use App\Models\Project;
use App\Models\SurveySheet;
use App\Observers\ProjectObserver;
use App\Observers\SurveySheetObserver;
use Illuminate\Support\ServiceProvider;

class ObserverServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Project::observe(ProjectObserver::class);

        SurveySheet::observe(SurveySheetObserver::class);
    }
}