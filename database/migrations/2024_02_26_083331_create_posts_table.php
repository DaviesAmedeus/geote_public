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
            $table->unsignedBigInteger('user_id'); // Foreign key column
            $table->unsignedBigInteger('category_id'); 
            $table->string('post_title');
            $table->text('post_intro');
            $table->text('post_content');
            $table->enum('status', ['Completed', 'Inprogress', 'Pending'])->default('Inprogress');
            $table->text('post_picture')->nullable();
            $table->string('author_name')->nullable();
            $table->text('author_photo')->nullable();
            $table->text('author_desc')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
           
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
