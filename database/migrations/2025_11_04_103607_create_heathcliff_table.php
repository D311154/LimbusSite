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
        Schema::create('heathcliff', function (Blueprint $table) {
            $table->id();
            $table->string('Identity');
        });

        DB::table('heathcliff')->insert([
            ['Identity' => 'LCB Sinner'],
            ['Identity' => 'Shi Assoc. South Section 5'],
            ['Identity' => 'N Corp. Kleinhammer'],
            ['Identity' => 'Seven Assoc. South Section 4'],
            ['Identity' => 'Multicrack Office Fixer'],
            ['Identity' => 'R Corp. 4th Pack Rabbit'],
            ['Identity' => 'Lobotomy E.G.O::Sunshower'],
            ['Identity' => 'The Pequod Harpooneer'],
            ['Identity' => 'Öufi Assoc. South Section 3'],
            ['Identity' => 'Wild Hunt'],
            ['Identity' => 'Full-Stop Office Fixer'],
            ['Identity' => 'Kurokumo Clan Wakashu'],
            ['Identity' => 'W Corp. L4 Cleanup Agent - CCA'],
            ['Identity' => 'Heishou Pack - You Branch Adept'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('heathcliff');
    }
};
