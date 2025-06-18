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
            $table->integer('player_count')->comment('number of players played in a game');
            $table->float('win_point')->nullable();
            $table->float('lose_point')->nullable();
            $table->float('draw_point')->nullable();
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
