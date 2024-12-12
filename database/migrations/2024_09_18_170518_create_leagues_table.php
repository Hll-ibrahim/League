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
        Schema::create('leagues', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->foreignId('sport_id')->constrained('sports')->onDelete('cascade');
            $table->foreignId('league_type_id')->constrained('league_types')->onDelete('cascade');
            $table->float('winPoint')->default(3);
            $table->float('losePoint')->default(0);
            $table->float('drawPoint')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leagues');
    }
};
