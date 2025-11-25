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
        Schema::create('meursault', function (Blueprint $table) {
            $table->id();
            $table->string('Identity');
        });

        DB::table('meursault')->insert([
            ['Identity' => 'LCB Sinner'],
            ['Identity' => 'Liu Assoc. South Section 6'],
            ['Identity' => 'Rosespanner Workshop Fixer'],
            ['Identity' => 'The Middle Little Brother'],
            ['Identity' => 'Dead Rabbits Boss'],
            ['Identity' => 'W Corp. L2 Cleanup Agent'],
            ['Identity' => 'N Corp. Großhammer'],
            ['Identity' => 'R Corp. 4th Pack Rhino'],
            ['Identity' => 'Blade Lineage Mentor'],
            ['Identity' => 'Dieci Assoc. South Section 4 Director'],
            ['Identity' => 'Cinq Assoc. West Section 3'],
            ['Identity' => 'The Thumb East Capo IIII'],
            ['Identity' => 'The Prince of La Manchaland'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meursault');
    }
};
