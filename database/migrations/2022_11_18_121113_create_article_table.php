<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function(Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->longText('body_url');
            $table->timestamp('published_at')->nullable();
            $table->timestamp('expires_at')->nullable();
            $table->timestamp('recorded_at')->nullable();
            $table->timestamp('archived_at')->nullable();
            // $table->integer('section_id');
            $table->text('section_uri');
            $table->longText('backstory')->nullable();
            $table->integer('word_count')->default(0);
            $table->text('image_url');
            $table->text('image_caption')->nullable();
            $table->longText('video_embed')->nullable();
            $table->text('video_provider')->nullable();
            $table->string('video_ratio')->nullable();
            $table->enum('work_status', ['published', 'draft', 'archived'])->default('published');
            $table->integer('author_id');
            $table->longText('abstract');
            $table->longText('about')->nullable();
            $table->integer('comment_count')->default(0);
            $table->longText('correction')->nullable();
            $table->string('country_of_origin')->nullable();
            $table->longText('credit_text')->nullable();
            $table->integer('editor_id')->nullable();
            $table->string('in_language');
            $table->text('headline_uri')->unique();
            $table->text('headline')->unique();
            $table->text('alternative_headline')->unique()->nullable();
            $table->longText('is_based_on')->nullable();
            $table->text('keywords');
            $table->text('location_created')->nullable();
            $table->text('license_url')->nullable();
            $table->string('time_required');
            $table->string('typical_age_range')->default('6-');
            $table->longText('citation')->nullable();
            $table->text('dateline')->nullable();
            $table->text('speakable')->nullable();
            $table->integer('contributor_id')->nullable();
            $table->text('copyright_holder')->nullable();
            $table->text('copyright_notice')->nullable();
            $table->integer('copyright_year')->nullable();
            $table->boolean('is_family_friendly')->default(true);
            $table->text('publication')->default('The Copenhagen Gates');
            $table->text('publishing_principles')->deault('https://cphgates.com/about/publishing-principles');
            $table->integer('translation_of_work')->nullable();
            $table->integer('translator_id')->nullable();
            $table->boolean('is_accessible_for_free')->nullable();

            $table->foreign('author_id')->references('id')->on('user'); // ->onDelete('cascade');
            $table->foreign('editor_id')->references('id')->on('user');
            $table->foreign('contributor_id')->references('id')->on('user');
            $table->foreign('translator_id')->references('id')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article');
    }
}
