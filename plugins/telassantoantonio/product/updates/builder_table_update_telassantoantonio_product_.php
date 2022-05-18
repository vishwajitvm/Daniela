<?php namespace TelasSantoAntonio\Product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTelassantoantonioProduct extends Migration
{
    public function up()
    {
        Schema::table('telassantoantonio_product_', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
            $table->string('box_color')->change();
            $table->dropColumn('photo');
        });
    }
    
    public function down()
    {
        Schema::table('telassantoantonio_product_', function($table)
        {
            $table->increments('id')->unsigned()->change();
            $table->string('box_color', 191)->change();
            $table->string('photo', 191);
        });
    }
}
