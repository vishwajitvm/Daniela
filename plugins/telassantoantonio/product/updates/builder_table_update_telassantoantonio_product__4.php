<?php namespace TelasSantoAntonio\Product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTelassantoantonioProduct4 extends Migration
{
    public function up()
    {
        Schema::table('telassantoantonio_product_', function($table)
        {
            $table->string('type')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('telassantoantonio_product_', function($table)
        {
            $table->boolean('type')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
