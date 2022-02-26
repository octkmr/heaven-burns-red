<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('styles', function (Blueprint $table) {
            $table->id();
            $table->string('name', 64)->comment('名前');
            $table->unsignedTinyInteger('character_id')->comment('キャラクターID');
            $table->unsignedTinyInteger('role_id')->comment('ロールID');
            $table->unsignedTinyInteger('rarity_id')->comment('レアリティID');
            $table->unsignedTinyInteger('weapon_id')->comment('武器種ID');
            $table->unsignedTinyInteger('attack_id')->comment('攻撃タイプID');
            $table->unsignedTinyInteger('element_id')->comment('属性ID');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('styles');
    }
};