<?php namespace Jakub\Todolist\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateZoznamsTable extends Migration
{
    public function up()
    {
        Schema::create('jakub_todolist_zoznams', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
            $table->string('meno');
        });
    }

    public function down()
    {
        Schema::dropIfExists('jakub_todolist_zoznams');
    }
}
