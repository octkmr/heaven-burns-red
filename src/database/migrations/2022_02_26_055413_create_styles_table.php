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
            $table->string('rarity', 2)->comment('レアリティ');
            $table->string('name', 64)->comment('名前');
            $table->unsignedTinyInteger('character_id')->comment('キャラクターID');
            $table->string('role', 16)->comment('ロール');
            $table->string('attack', 4)->comment('攻撃タイプ');
            $table->string('element', 2)->nullable()->comment('属性');

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
