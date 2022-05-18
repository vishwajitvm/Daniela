<?php namespace TelasSantoAntonio\Product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTelassantoantonioProductSubtypes extends Migration
{
    public function up()
    {
        Schema::rename('telassantoantonio_product_subtype', 'telassantoantonio_product_subtypes');
        Schema::table('telassantoantonio_product_subtypes', function($table)
        {
            $table->string('image')->change();
        });
    }
    
    public function down()
    {
        Schema::rename('telassantoantonio_product_subtypes', 'telassantoantonio_product_subtype');
        Schema::table('telassantoantonio_product_subtype', function($table)
        {
            $table->string('image', 191)->change();
        });
    }
}
