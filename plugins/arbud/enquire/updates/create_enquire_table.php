<?php namespace Arbud\Enquire\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

/**
 * some_upgrade_file.php
 */
class CreateEnquireTable extends Migration
{
     public function up()
    {
        Schema::create('mindi_enquire', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('quotation_number');
            $table->string('full_name');
            $table->string('email');
            $table->string('phone_number');
            $table->string('mobile_number');
            $table->string('address');
            $table->string('city');
            $table->string('postal_code');
            $table->string('country');
            $table->string('state');
            $table->string('region');
            $table->string('enquire_type');
            $table->datetime('day_in');
            $table->datetime('day_out');
            $table->string('room_type');
            $table->integer('quantity');
            $table->integer('adult');
            $table->integer('children');
            $table->integer('infant');
            $table->string('airport_name');
            $table->string('airport_location');
            $table->string('flight_number');
            $table->string('arrival_time');
            $table->string('other_transport');
            $table->text('comment');
            $table->string('info_special_check');
            $table->string('info_special');
            $table->string('how_did_enquire');
            $table->string('status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('mindi_enquire');
    }
}