<?php
/**
 * Created by PhpStorm.
 * User: SammyMohamed
 * Date: 1/25/17
 * Time: 12:51 PM
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrackingTable extends Migration
{
    /**
     * Run the migrations
     */
    public function up()
    {
        Schema::create('tracking', function(Blueprint $table) {
            $table->increments('id');
            $table->string('ip');
            $table->string('item_type');
            $table->string('item_id');
            $table->string('url');
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('tracking');
    }
}