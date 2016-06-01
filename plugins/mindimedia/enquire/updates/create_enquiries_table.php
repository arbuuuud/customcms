<?php namespace Mindimedia\Enquire\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateEnquiriesTable extends Migration
{

    public function up()
    {
        Schema::create('mindimedia_enquire_enquiries', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable()->index();
            $table->string('title')->nullable();
            $table->string('slug')->index();
            $table->text('excerpt')->nullable();
            $table->text('content')->nullable();
            $table->text('content_html')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->boolean('published')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('mindimedia_enquire_enquiries');
    }

}
