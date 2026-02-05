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
        Schema::create('gregor', function (Blueprint $table) {
            $table->id();
            $table->string('Identity');
        });

        DB::table('gregor')->insert([
            ['Identity' => 'LCB Sinner'],
            ['Identity' => 'Liu Assoc. South Section 6'],
            ['Identity' => 'R.B. Sous-chef'],
            ['Identity' => 'Rosespanner Workshop Fixer'],
            ['Identity' => 'Kurokumo clan Captain'],
            ['Identity' => 'G Corp. Manager Corporal'],
            ['Identity' => 'Zwei Assoc. South Section 4'],
            ['Identity' => 'Twinhook Pirates First mate'],
            ['Identity' => 'Edgar Family Heir'],
            ['Identity' => 'The Priest of La Manchaland'],
            ['Identity' => 'Firefist Office Survivor'],
            ['Identity' => 'Heishou Pack - Si branch'],
            ['Identity' => 'Night Awls Capitano'],
            ['Identity' => 'Lobotomy E.G.O Lamp']
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gregor');
    }
};
