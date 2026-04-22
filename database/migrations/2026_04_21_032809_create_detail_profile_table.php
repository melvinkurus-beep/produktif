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
        Schema::create('detail_profile', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('username')-> unique();
            $table->string('email')-> unique();
            $table->timestamp('email_vertified_at')-> nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_profile');
    }
};
