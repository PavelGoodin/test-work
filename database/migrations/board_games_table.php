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
        
        Schema::create('board_games', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description');
            $table->tinyInteger('min_number_of_players')->default(1);
            $table->tinyInteger('max_number_of_players')->default(4);
            $table->string('age_of_players')->default('10');
            $table->string('play_time')->default('30-60');
            $table->smallInteger('company_id');
            $table->string('foto')->default('simple.png');
            $table->float('rating')->default(5.0);
            $table->timestamps();
            $table->boolean('hide')->default(0);
            
            //$table->timestamp('created_at');
            //$table->timestamp('updated_at');
            //$table->timestamp('deleted_at');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('board_games');
    }
};
