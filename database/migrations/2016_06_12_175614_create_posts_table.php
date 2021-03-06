<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table){
           // our schema is defined in here 
           $table->increments('id');
           $table->string('title');
           $table->text('description');
           $table->text('body');
           $table->string('author');
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // here we define what happens when we bring down our application
        // in this case we want to drop our posts table
        Schema::drop('posts');
    }
}
