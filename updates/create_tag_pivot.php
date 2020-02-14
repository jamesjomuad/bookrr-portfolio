<?php namespace Bookrr\Portfolio\Updates;


use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateTagsPivotTable extends Migration
{
    public function up()
    {
        Schema::create('bookrr_portfolio_tags_pivot', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('project_id');
            $table->integer('tag_id');
            $table->primary(['project_id','tag_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('bookrr_portfolio_tags_pivot');
    }
}