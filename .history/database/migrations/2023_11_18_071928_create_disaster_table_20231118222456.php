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
            $table->float('amount_paid');
            $table->float('amount_remaining');
            $table->timestamps();
  
        });

        Schema::table('disaster', function(Blueprint $table){
            $table->foreignId('member_id')->constrained(
                table:'members', indexName: 'disaster_member_id'
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
