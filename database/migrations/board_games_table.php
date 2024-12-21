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
            $table->longText('descriptions');
            $table->unsignedTinyInteger('developer_studio_id');
            $table->string('foto')->default('simple.png');
            $table->Integer('rating');
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
