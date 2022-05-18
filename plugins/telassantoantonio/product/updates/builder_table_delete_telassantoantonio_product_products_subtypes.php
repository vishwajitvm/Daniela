<?php namespace TelasSantoAntonio\Product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteTelassantoantonioProductProductsSubtypes extends Migration
{
    public function up()
    {
        Schema::dropIfExists('telassantoantonio_product_products_subtypes');
    }
    
    public function down()
    {
        Schema::create('telassantoantonio_product_products_subtypes', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('product_id');
            $table->integer('subtypes_id');
        });
    }
}
