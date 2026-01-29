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
            $table->enum('keyword', ['bleed', 'blunt', 'burn', 'charge', 'pierce', 'poise', 'rupture', 'sinking', 'slash', 'tremor']);
            $table->foreignId('YiSangId')->constrained('yi_sang')->onDelete('cascade');
            $table->boolean('YiSangBenched')->default(false);
            $table->foreignId('FaustId')->constrained('faust')->onDelete('cascade');
            $table->boolean('FaustBenched')->default(false);
            $table->foreignId('DonQuixoteId')->constrained('don_quixote')->onDelete('cascade');
            $table->boolean('DonQuixoteBenched')->default(false);
            $table->foreignId('RyoshuId')->constrained('ryoshu')->onDelete('cascade');
            $table->boolean('RyoshuBenched')->default(false);
            $table->foreignId('MeursaultId')->constrained('meursault')->onDelete('cascade');
            $table->boolean('MeursaultBenched')->default(false);
            $table->foreignId('HongLuId')->constrained('hong_lu')->onDelete('cascade');
            $table->boolean('HongLuBenched')->default(false);
            $table->foreignId('HeathcliffId')->constrained('heathcliff')->onDelete('cascade');
            $table->boolean('HeathcliffBenched')->default(false);
            $table->foreignId('IshmaelId')->constrained('ishmael')->onDelete('cascade');
            $table->boolean('IshmaelBenched')->default(false);
            $table->foreignId('RodionId')->constrained('rodion')->onDelete('cascade');
            $table->boolean('RodionBenched')->default(false);
            $table->foreignId('SinclairId')->constrained('sinclair')->onDelete('cascade');
            $table->boolean('SinclairBenched')->default(false);
            $table->foreignId('OutisId')->constrained('outis')->onDelete('cascade');
            $table->boolean('OutisBenched')->default(false);
            $table->foreignId('GregorId')->constrained('gregor')->onDelete('cascade');
            $table->boolean('GregorBenched')->default(false);
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
