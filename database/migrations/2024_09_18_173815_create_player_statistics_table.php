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
        Schema::create('player_statistics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_player_id')->constrained('team_player');
            $table->foreignId('game_id')->constrained('games');
            $table->foreignId('position_id')->constrained('positions');
            $table->boolean('id_substitute')->comment('1=substitute, 0=as');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('player_statistics');
    }
};
