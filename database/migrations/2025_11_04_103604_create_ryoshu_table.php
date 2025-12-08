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
        Schema::create('ryoshu', function (Blueprint $table) {
            $table->id();
            $table->string('Identity');
        });

        DB::table('ryoshu')->insert([
            ['Identity' => 'LCB Sinner'],
            ['Identity' => 'Seven Assoc. South Section 6'],
            ['Identity' => 'LCCB Assistant Manager'],
            ['Identity' => 'Liu Assoc. South Section 4'],
            ['Identity' => 'District 20 Yurodivy'],
            ['Identity' => 'Kurokumo Clan Wakashu'],
            ['Identity' => 'R.B. Chef de Cuisine'],
            ['Identity' => 'W Corp L3 Cleanup Agent'],
            ['Identity' => 'Edgar Family Chief Butler'],
            ['Identity' => 'Lobotomy E.G.O Red Eyes & Penitence'],
            ['Identity' => 'Heishou Pack - Mao Branch'],
            ['Identity' => 'N Corp. E.G.O Contempt, Awe'],
            ['Identity' => 'Drifting Blade of Hongyuan'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ryoshu');
    }
};
