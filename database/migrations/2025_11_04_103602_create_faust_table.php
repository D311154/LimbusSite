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
        Schema::create('faust', function (Blueprint $table) {
            $table->id();
            $table->string('Identity');
        });

        DB::table('faust')->insert([
            ['Identity' => 'LCB Sinner'],
            ['Identity' => 'W Corp. L2 Cleanup Agent'],
            ['Identity' => 'Lobotomy Corp. Remnant'],
            ['Identity' => 'Zwei Assoc. South Section 4'],
            ['Identity' => 'Wuthering Heights Butler'],
            ['Identity' => 'The One Who Grips'],
            ['Identity' => 'Seven Assoc. South Section 4'],
            ['Identity' => 'Lobotomy E.G.O::Regret'],
            ['Identity' => 'Blade Lineage Salsu'],
            ['Identity' => 'Multicrack Office Rep'],
            ['Identity' => 'LCE E.G.O::Ardor Blossom Star'],
            ['Identity' => 'Heishou Pack - Mao Branch Adept'],
            ['Identity' => 'Shi Assoc. East Section 3'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faust');
    }
};
