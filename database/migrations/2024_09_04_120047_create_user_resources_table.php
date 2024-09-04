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
        Schema::create('user_resources', function (Blueprint $table) {
            $table->id();
            $table->string('title'); 
            $table->text('description')->nullable(); 
            $table->enum('resource_type', ['video', 'pdf', 'ebook', 'article', 'template', 'tool', 'cheat_sheet', 'checklist', 'quiz']);
            $table->string('file_path')->nullable(); 
            $table->string('url')->nullable(); 
            $table->string('thumbnail')->nullable(); 
            $table->string('author')->nullable(); 
            $table->string('skill_set')->nullable(); 
            $table->text('tags')->nullable(); 
            $table->enum('access_level', ['free', 'paid', 'premium'])->default('free'); 
            $table->unsignedInteger('views_count')->default(0); 
            $table->unsignedInteger('downloads_count')->default(0); 
            $table->enum('is_active', ['Active', 'Inactive']); 
            $table->integer('uploaded_by')->nullable;
            $table->unsignedBigInteger('file_size')->nullable(); 
            $table->string('license_type')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_resources');
    }
};
