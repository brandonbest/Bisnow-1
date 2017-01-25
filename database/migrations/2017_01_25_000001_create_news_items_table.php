<?php
/**
 * Created by PhpStorm.
 * User: SammyMohamed
 * Date: 1/25/17
 * Time: 12:51 PM
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNewsItemsTable extends Migration
{
    /**
     * Run the migrations
     */
    public function up()
    {
        Schema::create('news_items', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('body');
            $table->date('date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('news_items');
    }
}