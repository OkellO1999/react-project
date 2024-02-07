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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('surname');
            $table->string('othernames');
            $table->string('nin');
            $table->string('phone_number');
            $table->string('user_role');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('status');
            $table->timestamps();
        });

        Schema::table('members', function (Blueprint $table){
            $table->foreignId('member')
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
