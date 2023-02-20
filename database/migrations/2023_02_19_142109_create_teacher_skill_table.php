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
        Schema::create('teacher_skill', function (Blueprint $table) {
            $table->unsignedBigInteger("teacher_id");
            $table->unsignedBigInteger("skill_id");
            $table->foreign("teacher_id")->references("id")->on("users");
            $table->foreign("skill_id")->references("id")->on("skills");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher_skill');
    }
};
