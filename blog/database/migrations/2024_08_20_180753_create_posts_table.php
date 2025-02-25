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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
           
            $table->string('title');
            $table->string('email')->unique()->nullable();
            $table->string('description')->unique()->nullable();
            $table->string('creator')->nullable();
            $table->string('image');
            $table->timestamps(); // 2 fields --> created_at , updated_at -->

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
