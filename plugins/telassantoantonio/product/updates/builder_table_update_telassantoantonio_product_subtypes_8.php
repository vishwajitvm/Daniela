<?php namespace TelasSantoAntonio\Product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTelassantoantonioProductSubtypes8 extends Migration
{
    public function up()
    {
        Schema::table('telassantoantonio_product_subtypes', function($table)
        {
            $table->integer('product_id');
        });
    }
    
    public function down()
    {
        Schema::table('telassantoantonio_product_subtypes', function($table)
        {
            $table->dropColumn('product_id');
        });
    }
}
