<?php namespace Ack\OurPractices\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAckOurpracticesCategories extends Migration
{
    public function up()
    {
        Schema::create('ack_ourpractices_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 255);
            $table->string('slug', 255);
            $table->string('description', 255);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ack_ourpractices_categories');
    }
}
