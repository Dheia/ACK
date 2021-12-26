<?php namespace Ack\Nsi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAckNsiItems extends Migration
{
    public function up()
    {
        Schema::create('ack_nsi_items', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->text('description');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ack_nsi_items');
    }
}
