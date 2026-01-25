<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('outis', function (Blueprint $table) {
            $table->id();
            $table->string('Identity');
        });

        DB::table('outis')->insert([
            ['Identity' => 'LCB Sinner'],
            ['Identity' => 'Blade Lineage Salsu'],
            ['Identity' => 'G Corp. Head Manager'],
            ['Identity' => 'Cinq Assoc. South Section 4'],
            ['Identity' => 'The Ring Pointillist Student'],
            ['Identity' => 'Seven Assoc. South Section 6 Director'],
            ['Identity' => 'Molar Office Fixer'],
            ['Identity' => 'Lobotomy E.G.O Magic Bullet'],
            ['Identity' => 'Wuthering Heights Chief Butler'],
            ['Identity' => 'W Corp. L3 Cleanup Captain'],
            ['Identity' => 'The Barber of La Manchaland'],
            ['Identity' => 'Heishou Pack - Mao Branch'],
            ['Identity' => 'T Corp. Class 3 VDCU Staff'],
            ['Identity' => 'LCA Udjat Vanguard Team 3 Leader'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('outis');
    }
};
