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
        Schema::create('yi_sang', function (Blueprint $table) {
            $table->id();
            $table->string('Identity');
        });

        DB::table('yi_sang')->insert([
            ['Identity' => 'LCB Sinner'],
            ['Identity' => 'Seven Assoc. South Section 6'],
            ['Identity' => 'Molar Office Fixer'],
            ['Identity' => 'The Pequod First Mate'],
            ['Identity' => 'Dieci Assoc. South Section 4'],
            ['Identity' => 'LCE E.G.O Lantern'],
            ['Identity' => 'Blade Lineage Salsu'],
            ['Identity' => 'Effloresced E.G.O Spicebush'],
            ['Identity' => 'W Corp. L3 Cleanup Agent'],
            ['Identity' => 'The Ring Pointillist Student'],
            ['Identity' => 'Lobotomy E.G.O Solemn Lament'],
            ['Identity' => 'Liu Assoc. South Section 3'],
            ['Identity' => 'N Corp. E.G.O Fell Bullet'],
            ['Identity' => 'Heishou Pack - Wu Branch Adept'],
        ]);
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('yi_sang');
    }
};
