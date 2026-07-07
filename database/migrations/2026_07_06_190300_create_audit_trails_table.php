<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('audit_trails',function(Blueprint $table){

            $table->id();

            $table->string('table_name');

            $table->unsignedBigInteger('record_id');

            $table->string('action');

            $table->foreignId('user_id')->nullable()->constrained();

            $table->longText('old_data')->nullable();

            $table->longText('new_data')->nullable();

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('audit_trails');
    }
};