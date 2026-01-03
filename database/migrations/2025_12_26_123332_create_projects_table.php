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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description_en');
            $table->text('description_fr');
            $table->longText('content_en')->nullable();
            $table->longText('content_fr')->nullable();
            $table->string('category');
            $table->json('technologies');
            $table->string('main_image')->nullable();
            $table->json('gallery_images')->nullable();
            $table->string('github_url')->nullable();
            $table->string('demo_url')->nullable();
            $table->date('project_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
