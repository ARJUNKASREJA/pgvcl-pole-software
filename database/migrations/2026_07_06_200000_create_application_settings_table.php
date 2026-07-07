<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('application_settings', function (Blueprint $table) {

            $table->id();

            $table->string('company_name');

            $table->text('company_address')->nullable();

            $table->string('company_email')->nullable();

            $table->string('company_phone')->nullable();

            $table->string('timezone')->default('Asia/Kolkata');

            $table->string('currency')->default('INR');

            $table->string('language')->default('en');

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('application_settings');
    }
};