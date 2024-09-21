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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')
                ->unique();
            $table->string('password');
            $table->text('about')
                ->nullable();
            $table->string('profile_pic')
                ->nullable();
            $table->boolean('is_admin')
                ->default(0)
                ->comment('0=>Staff, 1=>Admin etc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
