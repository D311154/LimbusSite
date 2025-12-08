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
        Schema::create('mirror_Dungeons', function (Blueprint $table) {
            $table->id();
            $table->integer('floor');
            $table->enum('difficulty', ['normal', 'hard']);
            $table->integer('adversity')->nullable();
            $table->enum('keyword', ['keywordless', 'bleed', 'blunt', 'burn', 'charge', 'pierce', 'poise', 'rupture', 'sinking', 'slash', 'tremor']);
            $table->foreignId('YiSangId')->constrained('yi_sang')->onDelete('cascade');
            $table->foreignId('FaustId')->constrained('faust')->onDelete('cascade');
            $table->foreignId('DonQuixoteId')->constrained('don_quixote')->onDelete('cascade');
            $table->foreignId('RyoshuId')->constrained('ryoshu')->onDelete('cascade');
            $table->foreignId('MeursaultId')->constrained('meursault')->onDelete('cascade');
            $table->foreignId('HongLuId')->constrained('hong_lu')->onDelete('cascade');
            $table->foreignId('HeathcliffId')->constrained('heathcliff')->onDelete('cascade');
            $table->foreignId('IshmaelId')->constrained('ishmael')->onDelete('cascade');
            $table->foreignId('RodionId')->constrained('rodion')->onDelete('cascade');
            $table->foreignId('SinclairId')->constrained('sinclair')->onDelete('cascade');
            $table->foreignId('OutisId')->constrained('outis')->onDelete('cascade');
            $table->foreignId('GregorId')->constrained('gregor')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mirror_Dungeons');
    }
};
