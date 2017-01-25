<?php
/**
 * Created by PhpStorm.
 * User: SammyMohamed
 * Date: 1/25/17
 * Time: 12:51 PM
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations
     */
    public function up()
    {
        Schema::create('images', function(Blueprint $table) {
            $table->increments('id');
            $table->string('address');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('images');
    }
}