<?php namespace TelasSantoAntonio\Product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTelassantoantonioProductSubtype extends Migration
{
    public function up()
    {
        Schema::table('telassantoantonio_product_subtype', function($table)
        {
            $table->integer('products_id');
            $table->increments('id')->unsigned(false)->change();
            $table->string('image')->change();
        });
    }
    
    public function down()
    {
        Schema::table('telassantoantonio_product_subtype', function($table)
        {
            $table->dropColumn('products_id');
            $table->increments('id')->unsigned()->change();
            $table->string('image', 191)->change();
        });
    }
}
