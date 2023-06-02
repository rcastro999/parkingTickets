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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->integer('idCompany');
            $table->integer('idAndroidTerminal');
            $table->string('no');
            $table->decimal('p');
            $table->string('cn');
            $table->string('vt');
            $table->datetime('st');
            $table->datetime('et');
            $table->datetime('ret');
            $table->string('an');
            $table->string('sn');
            $table->integer('ps');
            $table->decimal('ep');
            $table->string('ct');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
