<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('drawing_settings', function (Blueprint $table) {

            $table->id();

            $table->string('company_name');

            $table->text('company_address')->nullable();

            $table->string('default_scale')->default('1:100');

            $table->string('paper_size')->default('A3');

            $table->string('title_block')->nullable();

            $table->string('north_symbol')->nullable();

            $table->boolean('auto_numbering')->default(true);

            $table->string('default_format')->default('SVG');

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('drawing_settings');
    }
};