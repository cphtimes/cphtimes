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
        Schema::create('article', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->longText('dateline');
            $table->longText('article_body');
            $table->string('article_section');
            $table->longText('backstory')->nullable();
            $table->integer('word_count');
            $table->longText('about')->nullable();
            $table->longText('abstract');
            $table->string('accountable_person')->nullable();
            $table->text('alternative_headline')->nullable();
            $table->dateTime('archived_at')->nullable();
            $table->string('audience')->nullable();
            $table->string('author');
            // $table->citation
            // $table->comment
            $table->integer('comment_count');
            $table->string('content_location')->nullable();
            $table->dateTime('content_reference_time')->nullable();
            $table->string('contributor')->nullable();
            $table->string('copyright_holder');
            $table->string('copyright_notice');
            $table->longText('correction')->nullable();
            $table->enum('creative_work_status', ['draft', 'published', 'obsolete'])->nullable();
            $table->string('creator')->nullable();
            $table->text('credit_text')->nullable();
            $table->dateTime('date_published');
            $table->dateTime('date_created');
            $table->dateTime('date_modified');
            $table->string('discussion_url')->nullable();
            $table->string('editor')->nullable();
            $table->text('headline');
            $table->text('headline_dashed');
            $table->string('in_language');
            $table->boolean('is_accessible_for_free');
            $table->longText('is_based_on')->nullable();
            $table->boolean('is_family_friendly');
            $table->longText('is_part_of')->nullable();
            // $table->Keywords
            $table->string('license');
            $table->dateTime('location_created')->nullable();
            $table->longText('main_entity')->nullable();
            $table->string('maintainer')->nullable();
            // $table->mentions
            $table->string('producer')->nullable();
            $table->string('provider')->nullable();
            $table->string('publication');
            $table->longText('publishing_principles')->nullable();
            $table->string('source_organization')->nullable();
            $table->text('text');
            $table->string('thumbnail_url');
            $table->integer('time_required');
            $table->string('translation_of_work')->nullable();
            $table->string('translator')->nullable();
            $table->string('typical_age_range')->nullable();
            $table->float('version');
            // $table->video
            // $table->image
            $table->string('work_translation')->nullable();
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
