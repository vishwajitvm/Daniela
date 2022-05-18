<?php namespace TelasSantoAntonio\Product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTelassantoantonioProductSubtypes6 extends Migration
{
    public function up()
    {
        Schema::table('telassantoantonio_product_subtypes', function($table)
        {
            $table->integer('products_id');
        });
    }
    
    public function down()
    {
        Schema::table('telassantoantonio_product_subtypes', function($table)
        {
            $table->dropColumn('products_id');
        });
    }
}
