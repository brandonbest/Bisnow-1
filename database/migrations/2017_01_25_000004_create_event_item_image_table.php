<?php
/**
 * Created by PhpStorm.
 * User: SammyMohamed
 * Date: 1/25/17
 * Time: 1:11 PM
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventItemImageTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('event_item_image', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('event_item_id')->unsigned();
            $table->integer('image_id')->unsigned();
            //$table->timestamps();
            $table->foreign('event_item_id')->references('id')->on('event_items');
            $table->foreign('image_id')->references('id')->on('images');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('event_item_image');
    }
}