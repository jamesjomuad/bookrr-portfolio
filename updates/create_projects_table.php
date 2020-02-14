<?php namespace Bookrr\Portfolio\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateProjectsTable extends Migration
{
    public function up()
    {
        Schema::create('bookrr_portfolio_projects', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('url');
            $table->text('description')->nullable();
            $table->text('features')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bookrr_portfolio_projects');
    }
}
