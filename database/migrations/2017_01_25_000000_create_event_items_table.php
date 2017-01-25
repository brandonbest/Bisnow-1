<?php
/**
 * Created by PhpStorm.
 * User: SammyMohamed
 * Date: 1/25/17
 * Time: 12:51 PM
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventItemsTable extends Migration
{
    /**
     * Run the migrations
     */
    public function up()
    {
        Schema::create('event_items', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('event_items');
    }
}