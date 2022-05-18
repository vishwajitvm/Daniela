<?php namespace TelasSantoAntonio\Product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTelassantoantonioProduct3 extends Migration
{
    public function up()
    {
        Schema::table('telassantoantonio_product_', function($table)
        {
            $table->boolean('type');
        });
    }
    
    public function down()
    {
        Schema::table('telassantoantonio_product_', function($table)
        {
            $table->dropColumn('type');
        });
    }
}
