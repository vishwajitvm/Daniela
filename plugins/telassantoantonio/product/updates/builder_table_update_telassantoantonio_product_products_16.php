<?php namespace TelasSantoAntonio\Product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTelassantoantonioProductProducts16 extends Migration
{
    public function up()
    {
        Schema::table('telassantoantonio_product_products', function($table)
        {
            $table->text('short_description');
            $table->text('full_description');
            $table->dropColumn('title');
            $table->dropColumn('content');
        });
    }
    
    public function down()
    {
        Schema::table('telassantoantonio_product_products', function($table)
        {
            $table->dropColumn('short_description');
            $table->dropColumn('full_description');
            $table->text('title');
            $table->text('content');
        });
    }
}
