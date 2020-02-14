<?php namespace Bookrr\Portfolio\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateTagsTable extends Migration
{
    public function up()
    {
        Schema::create('bookrr_portfolio_tags', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name',50);
            $table->text('description')->nullable();
            $table->string('slug',50)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bookrr_portfolio_tags');
    }
}
