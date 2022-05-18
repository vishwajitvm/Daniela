<?php namespace TelasSantoAntonio\Product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTelassantoantonioProductProducts10 extends Migration
{
    public function up()
    {
        Schema::table('telassantoantonio_product_products', function($table)
        {
            $table->dropColumn('subtype_image');
            $table->dropColumn('subtype_table');
            $table->dropColumn('subtype_text_image');
        });
    }
    
    public function down()
    {
        Schema::table('telassantoantonio_product_products', function($table)
        {
            $table->text('subtype_image')->nullable();
            $table->text('subtype_table')->nullable();
            $table->text('subtype_text_image')->nullable();
        });
    }
}
