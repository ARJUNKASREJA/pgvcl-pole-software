<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('drawings', function (Blueprint $table) {

            $table->id();

            $table->foreignId('project_id')->constrained();

            $table->foreignId('pole_id')->constrained();

            $table->string('drawing_no')->unique();

            $table->string('drawing_type');

            $table->string('svg_file')->nullable();

            $table->string('dwg_file')->nullable();

            $table->string('pdf_file')->nullable();

            $table->text('remarks')->nullable();

            $table->boolean('status')->default(true);

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('drawings');
    }
};