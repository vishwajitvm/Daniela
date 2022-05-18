<?php namespace TelasSantoAntonio\Product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteTelassantoantonioProductSubtypes2 extends Migration
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
            $table->string('title', 191);
            $table->string('name_sub', 191);
            $table->integer('products_id');
            $table->integer('subtype_id');
            $table->integer('product_id');
        });
    }
}
