<?php

use App\Models\Author;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Category::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Author::class)->nullable();
            $table->string('post_title');
            $table->text('post_intro');
            $table->text('post_content');
            $table->enum('status', ['Completed', 'Inprogress', 'Pending'])->default('Inprogress');
            $table->text('post_picture')->nullable();
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
