<?php namespace TelasSantoAntonio\Product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTelassantoantonioProductSubtypes4 extends Migration
{
    public function up()
    {
        Schema::table('telassantoantonio_product_subtypes', function($table)
        {
            $table->renameColumn('name', 'name_sub');
        });
    }
    
    public function down()
    {
        Schema::table('telassantoantonio_product_subtypes', function($table)
        {
            $table->renameColumn('name_sub', 'name');
        });
    }
}
