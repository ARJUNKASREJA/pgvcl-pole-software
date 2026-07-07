<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('camera_photos', function (Blueprint $table) {

            $table->id();

            $table->foreignId('project_id')->constrained();

            $table->foreignId('pole_id')->constrained();

            $table->foreignId('gps_location_id')->nullable()->constrained();

            $table->string('photo');

            $table->text('remarks')->nullable();

            $table->foreignId('captured_by')->constrained('users');

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('camera_photos');
    }
};