<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reply_attachments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ticket_reply_id')->constrained('ticket_replies')->onDelete('cascade');
            $table->string('type')->nullable();
            $table->string('path');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reply_attachments');
    }
};
