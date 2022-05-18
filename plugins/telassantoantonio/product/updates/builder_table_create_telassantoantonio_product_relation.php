<?php namespace TelasSantoAntonio\Product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTelassantoantonioProductRelation extends Migration
{
    public function up()
    {
        Schema::create('telassantoantonio_product_relation', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('product_id');
            $table->integer('subtype_id');
            $table->primary(['product_id','subtype_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('telassantoantonio_product_relation');
    }
}
