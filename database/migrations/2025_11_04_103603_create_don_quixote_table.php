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
        Schema::create('don_quixote', function (Blueprint $table) {
            $table->id();
            $table->string('Identity');
        });

        DB::table('don_quixote')->insert([
            ['Identity' => 'LCB Sinner'],
            ['Identity' => 'Shi Assoc. South Section 5 Director'],
            ['Identity' => 'N Corp. Mittelhammer'],
            ['Identity' => 'Lobotomy E.G.O Lantern'],
            ['Identity' => 'Blade Lineage Salsu'],
            ['Identity' => 'W Corp. L3 Cleanup Agent'],
            ['Identity' => 'Cinq Assoc. South Section 5 Director'],
            ['Identity' => 'The Middle Little Sister'],
            ['Identity' => 'T Corp. Class 3 Collection Staff'],
            ['Identity' => 'The Manager Of La Manchaland'],
            ['Identity' => 'Cinq Assoc. East Section 3'],
            ['Identity' => 'Lobotomy E.G.O In The Name of Love and Hate'],
            ['Identity' => 'Heishou Pack - Wei Branch'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('don_quixote');
    }
};
