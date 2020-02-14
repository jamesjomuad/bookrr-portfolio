<?php namespace Bookrr\Portfolio\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateAwardsTable extends Migration
{
    public function up()
    {
        Schema::create('bookrr_portfolio_awards', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('sub_title');
            $table->timestamp('date');
            $table->text('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bookrr_portfolio_awards');
    }
}
