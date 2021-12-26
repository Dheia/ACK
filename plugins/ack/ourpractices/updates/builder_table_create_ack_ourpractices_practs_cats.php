<?php namespace Ack\OurPractices\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAckOurpracticesPractsCats extends Migration
{
    public function up()
    {
        Schema::create('ack_ourpractices_practs_cats', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('practice_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->primary(['practice_id','category_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ack_ourpractices_practs_cats');
    }
}
