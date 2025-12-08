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
        Schema::create('sinclair', function (Blueprint $table) {
            $table->id();
            $table->string('Identity');
        });

        DB::table('sinclair')->insert([
            ['Identity' => 'LCB Sinner'],
            ['Identity' => 'Zwei Assoc. South Section 6'],
            ['Identity' => 'Los Mariachis Jefe'],
            ['Identity' => 'Lobotomy E.G.O Red Sheet'],
            ['Identity' => 'Molar Boatworks Fixer'],
            ['Identity' => 'Zwei Assoc. West Section 3'],
            ['Identity' => 'Blade Lineage Salsu'],
            ['Identity' => 'The One Who Shall Grip'],
            ['Identity' => 'Cinq Assoc. South Section 4 Director'],
            ['Identity' => 'Dawn Office Fixer'],
            ['Identity' => 'Devyat Assoc. North Section 3'],
            ['Identity' => 'The Middle Little Brother'],
            ['Identity' => 'The Thumb East Soldato II'],
            ['Identity' => 'Heishou Pack - You Branch'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sinclair');
    }
};
