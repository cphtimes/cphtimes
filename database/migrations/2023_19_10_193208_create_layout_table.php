<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateLayoutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layout', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('section_uri')->nullable();
            $table->integer('article_id');
            
            $table->foreign('article_id')->references('id')->on('article');
            $table->integer('position');
        });
        DB::statement("ALTER TABLE layout ADD UNIQUE (section_uri, article_id)");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('layout');
    }
}
