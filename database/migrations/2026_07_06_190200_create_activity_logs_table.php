<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('activity_logs',function(Blueprint $table){

            $table->id();

            $table->foreignId('user_id')->constrained();

            $table->string('module');

            $table->string('activity');

            $table->string('ip')->nullable();

            $table->string('browser')->nullable();

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('activity_logs');
    }
};