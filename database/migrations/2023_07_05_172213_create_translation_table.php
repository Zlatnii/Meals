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
        Schema::create('translation', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->unsignedBigInteger('meals_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('ingredients_id');
            $table->unsignedBigInteger('language_id');
            $table->timestamps();
            $table->softDeletes('delete_at');

            $table->foreign('meals_id')->references('id')->on('meals');
            $table->foreign('category_id')->references('id')->on('category');
            $table->foreign('ingredients_id')->references('id')->on('ingredients');
            $table->foreign('language_id')->references('id')->on('languages')->onDelete('cascade');

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('translation');
    }
};
