<?php namespace TelasSantoAntonio\Product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTelassantoantonioProduct2 extends Migration
{
    public function up()
    {
        Schema::create('telassantoantonio_product_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('first_title')->nullable();
            $table->text('first_content')->nullable();
            $table->text('second_title')->nullable();
            $table->text('second_content')->nullable();
            $table->text('third_title')->nullable();
            $table->text('third_content')->nullable();
            $table->string('photo');
            $table->string('box_color');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('telassantoantonio_product_');
    }
}
