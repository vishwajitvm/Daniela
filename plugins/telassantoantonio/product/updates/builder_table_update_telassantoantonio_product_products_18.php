<?php namespace TelasSantoAntonio\Product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTelassantoantonioProductProducts18 extends Migration
{
    public function up()
    {
        Schema::table('telassantoantonio_product_products', function($table)
        {
            $table->dropColumn('field_type1');
            $table->dropColumn('field_type2');
            $table->dropColumn('field_type3');
            $table->dropColumn('field_type4');
        });
    }
    
    public function down()
    {
        Schema::table('telassantoantonio_product_products', function($table)
        {
            $table->text('field_type1')->nullable();
            $table->text('field_type2')->nullable();
            $table->text('field_type3');
            $table->text('field_type4');
        });
    }
}
