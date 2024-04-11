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
        Schema::create('bookingen', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('userid')->constrained();
            $table->foreignId('boatid')->constrained();
            $table->date('startdatum');
            $table->date('einddatum');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookingen');
    }
};
