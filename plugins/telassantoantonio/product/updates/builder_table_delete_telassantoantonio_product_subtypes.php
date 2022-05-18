<?php namespace TelasSantoAntonio\Product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteTelassantoantonioProductSubtypes extends Migration
{
    public function up()
    {
        Schema::dropIfExists('telassantoantonio_product_subtypes');
    }
    
    public function down()
    {
        Schema::create('telassantoantonio_product_subtypes', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
            $table->integer('products_id');
            $table->text('name_sub');
        });
    }
}
