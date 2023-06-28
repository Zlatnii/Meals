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
        Schema::create('languages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->unsignedBigInteger('meals_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('tags_id');
            $table->unsignedBigInteger('ingredients_id');
            $table->timestamps();
            $table->softDeletes('delete_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('languages');
    }
};
