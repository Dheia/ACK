<?php namespace Ack\OurPractices\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAckOurpracticesPractices extends Migration
{
    public function up()
    {
        Schema::create('ack_ourpractices_practices', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 255);
            $table->string('link', 255);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ack_ourpractices_practices');
    }
}
