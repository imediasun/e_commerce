<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColorsOfGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colors_of_goods', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_good')->default(0);
            $table->string('color_white')->default('0');
            $table->string('color_red')->default('0');
            $table->string('color_bezh')->default('0');
            $table->string('color_siren')->default('0');
            $table->string('color_dark_pink')->default('0');
            $table->string('color_green')->default('0');
            $table->string('color_grey')->default('0');
            $table->string('color_broun')->default('0');
            $table->string('color_light_blue')->default('0');
            $table->string('color_black')->default('0');
            $table->string('color_pink')->default('0');
            $table->string('color_malin')->default('0');
            $table->string('color_yellow')->default('0');
            $table->string('color_blue')->default('0');
            $table->string('color_dark_brown')->default('0');
            $table->string('color_light_green')->default('0');
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('colors_of_goods');
    }
}
