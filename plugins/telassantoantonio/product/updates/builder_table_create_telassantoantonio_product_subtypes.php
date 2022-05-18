<?php namespace TelasSantoAntonio\Product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTelassantoantonioProductSubtypes extends Migration
{
    public function up()
    {
        Schema::create('telassantoantonio_product_subtypes', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('telassantoantonio_product_subtypes');
    }
}
