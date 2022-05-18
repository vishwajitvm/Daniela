<?php namespace TelasSantoAntonio\Product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTelassantoantonioProductSubtypes7 extends Migration
{
    public function up()
    {
        Schema::table('telassantoantonio_product_subtypes', function($table)
        {
            $table->integer('subtype_id');
        });
    }
    
    public function down()
    {
        Schema::table('telassantoantonio_product_subtypes', function($table)
        {
            $table->dropColumn('subtype_id');
        });
    }
}
