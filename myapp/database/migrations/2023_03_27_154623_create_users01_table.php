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
        Schema::create('users01', function (Blueprint $table) {
            $table->id();
            $table ->string('email');
            $table ->string('password');
            $table ->string('name');
            $table ->string('country');
            $table ->string('sex');
            $table ->string('hobby');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users01');
    }
};
