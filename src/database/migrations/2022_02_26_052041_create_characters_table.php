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
            $table->unsignedTinyInteger('unit_id')->comment('部隊ID');
            $table->date('birthday')->comment('誕生日');
            $table->unsignedSmallInteger('height')->comment('身長');
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
