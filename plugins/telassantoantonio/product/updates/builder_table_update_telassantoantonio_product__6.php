<?php namespace TelasSantoAntonio\Product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTelassantoantonioProduct6 extends Migration
{
    public function up()
    {
        Schema::table('telassantoantonio_product_', function($table)
        {
            $table->text('title');
            $table->text('content');
            $table->dropColumn('first_title');
            $table->dropColumn('first_content');
            $table->dropColumn('second_title');
            $table->dropColumn('second_content');
            $table->dropColumn('third_title');
            $table->dropColumn('third_content');
        });
    }
    
    public function down()
    {
        Schema::table('telassantoantonio_product_', function($table)
        {
            $table->dropColumn('title');
            $table->dropColumn('content');
            $table->text('first_title');
            $table->text('first_content');
            $table->text('second_title')->nullable();
            $table->text('second_content')->nullable();
            $table->text('third_title')->nullable();
            $table->text('third_content')->nullable();
        });
    }
}
