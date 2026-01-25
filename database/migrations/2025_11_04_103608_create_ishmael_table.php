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
        Schema::create('ishmael', function (Blueprint $table) {
            $table->id();
            $table->string('Identity');
        });

        DB::table('ishmael')->insert([
            ['Identity' => 'LCB Sinner'],
            ['Identity' => 'Shi Assoc. South Section 5'],
            ['Identity' => 'LCCB Assistant Manager'],
            ['Identity' => 'Lobotomy E.G.O Sloshing'],
            ['Identity' => 'Edgar Family Butler'],
            ['Identity' => 'R Corp. 4th Pack Reindeer'],
            ['Identity' => 'Liu Assoc. South Section 4'],
            ['Identity' => 'Molar Boatworks Fixer'],
            ['Identity' => 'The Pequod Captain'],
            ['Identity' => 'Zwei Assoc. West Section 3'],
            ['Identity' => 'Kurokumo Clan Captain'],
            ['Identity' => 'Family Hierarch Candidate'],
            ['Identity' => 'Jeongs Office Rep'],
            ['Identity' => 'The House of Spiders - The Middle Apprentice']
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ishmael');
    }
};
