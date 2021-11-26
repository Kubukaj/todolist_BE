<?php namespace Jakub\Blog\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('jakub_blog_posts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('Title');
            $table->string('Obsah');
            $table->string('Meno');
            $table->tinyInteger('Videnia');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jakub_blog_posts');
    }
}
