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
        Schema::create('rodion', function (Blueprint $table) {
            $table->id();
            $table->string('Identity');
        });

        DB::table('rodion')->insert([
            ['Identity' => 'LCB Sinner'],
            ['Identity' => 'LCCB Assistant Manager'],
            ['Identity' => 'N Corp. Mittelhammer'],
            ['Identity' => 'Zwei Assoc. South Section 5'],
            ['Identity' => 'T Corp. Class 2 Collection Staff'],
            ['Identity' => 'Kurokumo Clan Wakashu'],
            ['Identity' => 'Rosespanner Workshop Rep'],
            ['Identity' => 'Dieci Assoc. Section 4'],
            ['Identity' => 'Liu Assoc. South Section 4 Director'],
            ['Identity' => 'Decyat assoc. North Section 3'],
            ['Identity' => 'The Princess of La Manchaland'],
            ['Identity' => 'Heishou Pack - Si Branch'],
            ['Identity' => 'Lobotomy E.G.O::The Sword Sharpened with Tears'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rodion');
    }
};
