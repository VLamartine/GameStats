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
        Schema::create('conexo_user_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->unsignedBigInteger('game_id');
            $table->foreign('game_id')->references('id')->on('conexos');

            $table->integer('orange');
            $table->integer('green');
            $table->integer('blue');
            $table->integer('purple');
            $table->integer('tries');
            $table->integer('mistakes');
            $table->integer('hints')->default(0);
            $table->integer('before_first');
            $table->integer('between_first_second');
            $table->integer('between_second_third');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conexo_user_answers');
    }
};
