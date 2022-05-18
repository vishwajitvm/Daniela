<?php namespace TelasSantoAntonio\Product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTelassantoantonioProductSubtypes5 extends Migration
{
    public function up()
    {
        Schema::table('telassantoantonio_product_subtypes', function($table)
        {
            $table->string('name_sub');
            $table->increments('id')->unsigned(false)->change();
            $table->string('title')->change();
            $table->dropColumn('name');
        });
    }
    
    public function down()
    {
        Schema::table('telassantoantonio_product_subtypes', function($table)
        {
            $table->dropColumn('name_sub');
            $table->increments('id')->unsigned()->change();
            $table->string('title', 191)->change();
            $table->string('name', 191);
        });
    }
}
