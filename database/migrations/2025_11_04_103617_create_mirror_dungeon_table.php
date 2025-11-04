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
        Schema::create('mirror_dungeon', function (Blueprint $table) {
            $table->id();
            $table->integer('floor');
            $table->enum('difficulty', ['normal', 'hard']);
            $table->integer('adversity');
            $table->enum('keyword', ['keywordless', 'bleed', 'blunt', 'burn', 'charge', 'pierce', 'poise', 'rupture', 'sinking', 'slash', 'tremor']);
            $table->enum('YiSangId', ['LCB Sinner', 'Seven Assoc. South Section 6', 'Molar Office Fixer', 'The Pequod First Mate', 'Dieci Assoc. South Section 4', 'LCE E.G.O::Lantern', 'Blade Lineage Salsu', 'Effloresced E.G.O::Spicebush', 'W Corp. L3 Cleanup Agent', 'The Ring Pointillist Student', 'Lobotomy E.G.O::Solemn Lament', 'Liu Assoc. South Section 3', 'N Corp. E.G.O::Fell Bullet', 'Heishou Pack - Wu Branch Adept']);
            $table->enum('FaustId', ['LCB Sinner', 'W Corp. L2 Cleanup Agent', 'Lobotomy Corp. Remnant', 'Zwei Assoc. South Section 4', 'Wuthering Heights Butler', 'The One Who Grips', 'Seven Assoc. South Section 4', 'Lobotomy E.G.O::Regret', 'Blade Lineage Salsu', 'Multicrack Office Rep', 'LCE E.G.O::Ardor Blossom Star', 'Heishou Pack - Mao Branch Adept', 'Shi Assoc. East Section 3']);
            $table->enum('DonQuixoteId', ['LCB Sinner', 'Shi Assoc. South Section 5 Director', 'N Corp. Mittelhammer', 'Lobotomy E.G.O::Lantern', 'Blade Lineage Salsu', 'W Corp. L3 Cleanup Agent', 'Cinq Assoc. South Section 5 Director', 'The Middle Little Sister', 'T Corp. Class 3 Collection Staff', 'The Manager Of La Manchaland', 'Cinq Assoc. East Section 3', 'Lobotomy E.G.O::In The Name of Love and Hate']);
            $table->enum('RyoshuId', ['LCB Sinner', 'Seven Assoc. South Section 6', 'LCCB Assistant Manager', 'Liu Assoc. South Section 4', 'District 20 Yurodivy', 'Kurokumo Clan Wakashu', 'R.B. Chef de Cuisine', 'W Corp L3 Cleanup Agent', 'Edgar Family Chief Butler', 'Lobotomy E.G.O::Red Eyes & Penitence', 'Heishou Pack - Mao Branch', 'N Corp. E.G.O::Contempt, Awe']);
            $table->enum('MeursaultId', ['LCB Sinner', 'Liu Assoc. South Section 6', 'Rosespanner Workshop Fixer', 'The Middle Little Brother', 'Dead Rabbits Boss', 'W Corp. L2 Cleanup Agent', 'N Corp. Großhammer', 'R Corp. 4th Pack Rhino', 'Blade Lineage Mentor', 'Dieci Assoc. South Section 4 Director', 'Cinq Assoc. West Section 3', 'The Thumb East Capo IIII', 'The Prince of La Manchaland']);
            $table->enum('HongLuId', ['LCB Sinner', 'Kurokumo Clan Wakashu', 'Liu Assoc. South Section 5', 'W Corp. L2 Cleanup Agent', 'Hook Office Fixer', 'Fanghunt Office Fixer', 'Tingtang Gang Gangleader', 'K Corp. Class 3 Excision Staff', 'Dieci Assoc. South Section 4', 'District 20 Yurodivy', 'Full-Stop Office Rep', 'R Corp. 4th Pack Reindeer', 'The Lord of Hongyuan']);
            $table->enum('HeathcliffId', ['LCB Sinner', 'Shi Assoc. South Section 5', 'N Corp. Kleinhammer', 'Seven Assoc. South Section 4', 'Multicrack Office Fixer', 'R Corp. 4th Pack Rabbit', 'Lobotomy E.G.O::Sunshower', 'The Pequod Harpooneer', 'Öufi Assoc. South Section 3', 'Wild Hunt', 'Full-Stop Office Fixer', 'Kurokumo Clan Wakashu', 'W Corp. L4 Cleanup Agent - CCA']);
            $table->enum('IshmaelId', ['LCB Sinner', 'Shi Assoc. South Section 5', 'LCCB Assistant Manager', 'Lobotomy E.G.O::Sloshing', 'Edgar Family Butler', 'R Corp. 4th Pack Reindeer', 'Liu Assoc. South Section 4', 'Molar Boatworks Fixer', 'The Pequod Captain', 'Zwei Assoc. West Section 3', 'Kurokumo Clan Captain', 'Family Hierarch Candidate', 'Jeongs Office Rep']);
            $table->enum('RodionId', ['LCB Sinner', 'LCCB Assistant Manager', 'N Corp. Mittelhammer', 'Zwei Assoc. South Section 5', 'T Corp. Class 2 Collection Staff', 'Kurokumo Clan Wakashu', 'Rosespanner Workshop Rep', 'Dieci Assoc. Section 4', 'Liu Assoc. South Section 4 Director', 'Decyat assoc. North Section 3', 'The Princess of La Manchaland', 'Heishou Pack - Si Branch', 'Lobotomy E.G.O::The Sword Sharpened with Tears']);
            $table->enum('SinclairId', ['LCB Sinner', 'Zwei Assoc. South Section 6', 'Los Mariachis Jefe', 'Lobotomy E.G.O::Red Sheet', 'Molar Boatworks Fixer', 'Zwei Assoc. West Section 3', 'Blade Lineage Salsu', 'The One Who Shall Grip', 'Cinq Assoc. South Section 4 Director', 'Dawn Office Fixer', 'Devyat Assoc. North Section 3', 'The Middle Little Brother', 'The Thumb East Soldato II', 'Heishou Pack - You Branch']);
            $table->enum('OutisId', ['LCB Sinner', 'Blade Lineage Salsu', 'G Corp. Head Manager', 'Cinq Assoc. South Section 4', 'The Ring Pointillist Student', 'Seven Assoc. South Section 6 Director', 'Molar Office Fixer', 'Lobotomy E.G.O::Magic Bullet', 'Wuthering Heights Chief Butler', 'W Corp. L3 Cleanup Captain', 'The Barber of La Manchaland', 'Heishou Pack - Mao Branch', 'T Corp. Class 3 VDCU Staff']);
            $table->enum('GregorId', ['LCB Sinner', 'Liu Assoc. South Section 6', 'R.B. Sous-chef', 'Rosespanner Workshop Fixer', 'Kurokumo clan Captain', 'G Corp. Manager Corporal', 'Zwei Assoc. South Section 4', 'Twinhook Pirates First mate', 'Edgar Family Heir', 'The Priest of La Manchaland', 'Firefist Office Survivor', 'Heishou Pack - Si branch', 'Night Awls Capitano']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mirror_dungeon');
    }
};
