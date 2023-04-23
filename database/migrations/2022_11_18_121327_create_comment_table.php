<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('text');
            $table->integer('user_id');
            $table->integer('reply_article_id');
            $table->integer('reply_comment_id')->nullable();
            
            $table->foreign('user_id')->references('id')->on('user'); // ->onDelete('cascade');
            $table->foreign('reply_article_id')->references('id')->on('article'); // ->onDelete('cascade');
            $table->foreign('reply_comment_id')->references('id')->on('comment'); // ->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment');
    }
}
