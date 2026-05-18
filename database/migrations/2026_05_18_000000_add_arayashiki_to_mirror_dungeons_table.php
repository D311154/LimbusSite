<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('mirror_Dungeons', function (Blueprint $table) {
            $table->boolean('Arayashiki')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mirror_Dungeons', function (Blueprint $table) {
            $table->dropColumn('Arayashiki');
        });
    }
};
