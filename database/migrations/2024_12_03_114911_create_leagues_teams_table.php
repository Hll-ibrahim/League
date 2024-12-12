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
        Schema::create('leagues_teams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('season_league_id')->constrained('season_leagues');
            $table->foreignId('team_id')->constrained();
            $table->integer('win')->default(0);
            $table->integer('lose')->default(0);
            $table->integer('draw')->default(0);
            $table->integer('scored_goals')->default(0);
            $table->integer('goals_for')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leagues_teams');
    }
};
