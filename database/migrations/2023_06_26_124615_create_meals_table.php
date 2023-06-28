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
        Schema::create('meals', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('status');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('tags_id');
            $table->unsignedBigInteger('ingredients_id');
            $table->timestamps();
            $table->softDeletes('delete_at');

            $table->foreign('category_id')->references('id')->on('category');
            $table->foreign('tags_id')->references('id')->on('tags');
            $table->foreign('ingredients_id')->references('id')->on('ingredients');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meals');
    }
};
