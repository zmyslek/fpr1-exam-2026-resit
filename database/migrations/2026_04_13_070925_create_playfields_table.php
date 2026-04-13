<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('playfields', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('sponsor')->nullable();
            $table->string('size');
            $table->date('last_maintained_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('playfields');
    }
};
