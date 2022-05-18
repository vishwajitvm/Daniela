<?php namespace TelasSantoAntonio\Product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTelassantoantonioProduct2 extends Migration
{
    public function up()
    {
        Schema::table('telassantoantonio_product_', function($table)
        {
            $table->string('link');
            $table->text('first_title')->nullable(false)->change();
            $table->text('first_content')->nullable(false)->change();
            $table->string('box_color')->change();
        });
    }
    
    public function down()
    {
        Schema::table('telassantoantonio_product_', function($table)
        {
            $table->dropColumn('link');
            $table->text('first_title')->nullable()->change();
            $table->text('first_content')->nullable()->change();
            $table->string('box_color', 191)->change();
        });
    }
}
