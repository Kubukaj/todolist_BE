<?php namespace Jakub\Todolist\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateTasksTable extends Migration
{
    public function up()
    {
        Schema::create('jakub_todolist_tasks', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps('');
            $table->boolean('Hotove')->default(false);
            $table->string('Task')->nullable();
            $table->enum('Priorita', [ 'HIGH', 'MEDIUM', 'LOW' ])->nullable();
            $table->integer('zoznam_id')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jakub_todolist_tasks');
    }
}
