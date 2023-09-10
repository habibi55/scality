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
        Schema::create('penilaians', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->constrained('users');
            $table->foreignId('receiver_id')->constrained('users');
            $table->string('receiver_name');
            $table->integer('bulan_penilaian')->default('0');
            $table->integer('p1')->default('0');
            $table->integer('p2')->default('0');
            $table->integer('p3')->default('0');
            $table->integer('p4')->default('0');
            $table->integer('p5')->default('0');
            $table->integer('p6')->default('0');
            $table->integer('p7')->default('0');
            $table->integer('p8')->default('0');
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penilaians');
    }
};
