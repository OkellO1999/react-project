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
        Schema::create('disaster', function (Blueprint $table) {
            $table->id();
            $table->foreignId('member_id')->constrained(
                table: 'members'
            );
            $table->float('amount_paid');
            $table->float('amount_remaining');
            $table->timestamps();
            $table->foreignId('user_id')->constrained(
                table: 'users', indexName: 'posts_user_id'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disaster');
    }
};
