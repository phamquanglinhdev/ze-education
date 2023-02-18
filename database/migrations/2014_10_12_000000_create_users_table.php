<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string("role")->default("user");
            $table->longText("avatar")->nullable();
            $table->string("phone")->nullable();
            $table->integer("price")->nullable();
            $table->longText("description")->nullable();
            $table->longText("salary")->nullable();
            $table->longText("calendar")->nullable();
            $table->longText("level")->nullable();
            $table->longText("video")->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletesDatetime();
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
