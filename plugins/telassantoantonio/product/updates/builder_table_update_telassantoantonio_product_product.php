<?php namespace TelasSantoAntonio\Product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTelassantoantonioProductProduct extends Migration
{
    public function up()
    {
        Schema::rename('telassantoantonio_product_', 'telassantoantonio_product_product');
    }
    
    public function down()
    {
        Schema::rename('telassantoantonio_product_product', 'telassantoantonio_product_');
    }
}
