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
        Schema::create('android_terminals', function (Blueprint $table) {
            $table->id('idTerminal');
            $table->string('imei')->unique();
            $table->date('datePurchase');
            $table->integer('idCompany');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('android_terminals');
    }
};
