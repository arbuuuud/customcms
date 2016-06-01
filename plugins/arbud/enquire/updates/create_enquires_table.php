<?php namespace Arbud\Enquire\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateEnquiresTable extends Migration
{

    public function up()
    {
        Schema::create('arbud_enquire_enquires', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('arbud_enquire_enquires');
    }

}
