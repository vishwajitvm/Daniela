<?php namespace TelasSantoAntonio\Product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTelassantoantonioProduct extends Migration
{
    public function up()
    {
        Schema::create('telassantoantonio_product_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('first_name')->nullable();
            $table->text('first_description')->nullable();
            $table->text('second_name')->nullable();
            $table->text('second_description')->nullable();
            $table->text('third_name')->nullable();
            $table->text('third_description')->nullable();
            $table->string('photo');
            $table->integer('background_box');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('telassantoantonio_product_');
    }
}
