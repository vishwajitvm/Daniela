<?php namespace TelasSantoAntonio\Product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTelassantoantonioProductProducts extends Migration
{
    public function up()
    {
        Schema::rename('telassantoantonio_product_product', 'telassantoantonio_product_products');
    }
    
    public function down()
    {
        Schema::rename('telassantoantonio_product_products', 'telassantoantonio_product_product');
    }
}
