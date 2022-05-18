<?php namespace TelasSantoAntonio\Product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTelassantoantonioProductProducts2 extends Migration
{
    public function up()
    {
        Schema::table('telassantoantonio_product_products', function($table)
        {
            $table->text('name');
        });
    }
    
    public function down()
    {
        Schema::table('telassantoantonio_product_products', function($table)
        {
            $table->dropColumn('name');
        });
    }
}
