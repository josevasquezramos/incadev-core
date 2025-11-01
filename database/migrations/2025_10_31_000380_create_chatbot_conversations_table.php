<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('chatbot_conversations', function (Blueprint $table) {
            $table->id();
            $table->dateTime('started_at');
            $table->dateTime('ended_at')->nullable();
            $table->unsignedTinyInteger('satisfaction_rating')->nullable();
            $table->text('feedback')->nullable();
            $table->boolean('resolved')->default(false);
            $table->boolean('handed_to_human')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('chatbot_conversations');
    }
};