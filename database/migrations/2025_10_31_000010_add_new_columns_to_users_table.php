<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('dni', 10)->after('name')->nullable()->unique();
            $table->string('fullname')->after('dni')->nullable();
            $table->string('avatar', 10)->after('dni')->nullable();
            $table->string('phone', 10)->after('avatar')->nullable();
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['fullname', 'dni']);
        });
    }
};
