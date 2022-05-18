<?php namespace TelasSantoAntonio\Product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTelassantoantonioProductProductsSubtypes extends Migration
{
    public function up()
    {
        Schema::rename('telassantoantonio_product_relations', 'telassantoantonio_product_products_subtypes');
    }
    
    public function down()
    {
        Schema::rename('telassantoantonio_product_products_subtypes', 'telassantoantonio_product_relations');
    }
}
