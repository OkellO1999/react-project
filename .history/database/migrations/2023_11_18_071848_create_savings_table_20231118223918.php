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
        Schema::create('savings', function (Blueprint $table) {
            $table->id();
            $table->float('amount_saved');
            $table->timestamps();
        });
        Schema::table('savings', function(Blueprint $table){
            $table->unsignedBigInteger
            $table->foreignId('member_id')->constrained(
                table: 'members', indexName: 'savings_member_id'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('savings');
    }
};
