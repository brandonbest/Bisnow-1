<?php
/**
 * Created by PhpStorm.
 * User: SammyMohamed
 * Date: 1/25/17
 * Time: 1:11 PM
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNewsItemImageTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('news_item_image', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('match_id');
            //$table->timestamps();
            $table->foreign('news_item_id')->references('id')->on('news_items');
            $table->foreign('image_id')->references('id')->on('images');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('news_item_image');
    }
}