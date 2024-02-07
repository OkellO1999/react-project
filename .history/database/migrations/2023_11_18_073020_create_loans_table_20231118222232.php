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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->string('surname');
            $table->string('othernames');
            $table->string('debtor_type');
            $table->string('phone_number');
            $table->string('nin');
            $table->string('repayment_date');
            $table->string('amount_borrowed');
            $table->string('percentage');
            $table->timestamps();
        });
        Schema::table('loans', function(Blueprint $table){
            $table->foreignId('')
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
