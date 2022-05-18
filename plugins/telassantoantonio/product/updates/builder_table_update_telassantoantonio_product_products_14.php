<?php namespace TelasSantoAntonio\Product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTelassantoantonioProductProducts14 extends Migration
{
    public function up()
    {
        Schema::table('telassantoantonio_product_products', function($table)
        {
            $table->text('field_type1')->nullable()->change();
            $table->text('field_type2')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('telassantoantonio_product_products', function($table)
        {
            $table->text('field_type1')->nullable(false)->change();
            $table->text('field_type2')->nullable(false)->change();
        });
    }
}
