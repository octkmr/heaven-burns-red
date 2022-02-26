<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.php artisan cache:clear
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string('name', 64)->comment('名前');
            $table->string('unit')->comment('部隊');
            $table->string('birthday', 8)->comment('誕生日');
            $table->unsignedSmallInteger('height')->nullable()->comment('身長');
            $table->string('birthplace', 16)->comment('出身地');
            $table->string('seraph', 64)->comment('セラフ名');
            $table->string('seraphim_code', 128)->comment('セラフィムコード');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characters');
    }
};