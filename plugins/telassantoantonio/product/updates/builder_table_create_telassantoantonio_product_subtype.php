<?php namespace TelasSantoAntonio\Product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTelassantoantonioProductSubtype extends Migration
{
    public function up()
    {
        Schema::create('telassantoantonio_product_subtype', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
            $table->string('image');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('telassantoantonio_product_subtype');
    }
}
