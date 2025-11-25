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
        Schema::create('hong_lu', function (Blueprint $table) {
            $table->id();
            $table->string('Identity');
        });

        DB::table('hong_lu')->insert([
            ['Identity' => 'LCB Sinner'],
            ['Identity' => 'Kurokumo Clan Wakashu'],
            ['Identity' => 'Liu Assoc. South Section 5'],
            ['Identity' => 'W Corp. L2 Cleanup Agent'],
            ['Identity' => 'Hook Office Fixer'],
            ['Identity' => 'Fanghunt Office Fixer'],
            ['Identity' => 'Tingtang Gang Gangleader'],
            ['Identity' => 'K Corp. Class 3 Excision Staff'],
            ['Identity' => 'Dieci Assoc. South Section 4'],
            ['Identity' => 'District 20 Yurodivy'],
            ['Identity' => 'Full-Stop Office Rep'],
            ['Identity' => 'R Corp. 4th Pack Reindeer'],
            ['Identity' => 'The Lord of Hongyuan'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hong_lu');
    }
};
