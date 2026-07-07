<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('consumers', function (Blueprint $table) {

            $table->id();

            $table->foreignId('project_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('pole_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->string('consumer_no')->unique();

            $table->string('consumer_name');

            $table->string('meter_no')->nullable();

            $table->string('mobile')->nullable();

            $table->string('phase')->nullable();

            $table->string('connection_type')->nullable();

            $table->decimal('load',8,2)->nullable();

            $table->boolean('status')->default(true);

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('consumers');
    }
};