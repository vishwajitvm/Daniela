<?php namespace TelasSantoAntonio\Product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTelassantoantonioProductProducts3 extends Migration
{
    public function up()
    {
        Schema::table('telassantoantonio_product_products', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('telassantoantonio_product_products', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
