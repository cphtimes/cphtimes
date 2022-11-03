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
            $table->text('article_section');
            $table->longText('backstory')->nullable();
            $table->integer('word_count');
            $table->longText('about')->nullable();
            $table->longText('abstract');
            $table->text('accountable_person')->nullable();
            $table->text('alternative_headline')->nullable();
            $table->dateTime('archived_at')->nullable();
            $table->text('audience')->nullable();
            $table->text('author');
            // $table->citation
            // $table->comment
            // $table->integer('comment_count');
            $table->text('content_location')->nullable();
            $table->dateTime('content_reference_time')->nullable();
            $table->text('contributor')->nullable();
            $table->text('copyright_holder');
            $table->text('copyright_notice');
            $table->longText('correction')->nullable();
            $table->enum('creative_work_status', ['draft', 'published', 'obsolete'])->nullable();
            $table->text('creator')->nullable();
            $table->text('credit_text')->nullable();
            $table->dateTime('date_published');
            $table->dateTime('date_created');
            $table->dateTime('date_modified');
            $table->text('discussion_url')->nullable();
            $table->text('editor')->nullable();
            $table->text('headline');
            $table->text('headline_dashed');
            $table->text('in_language');
            $table->boolean('is_accessible_for_free');
            $table->longText('is_based_on')->nullable();
            $table->boolean('is_family_friendly');
            $table->longText('is_part_of')->nullable();
            // $table->Keywords
            $table->text('license');
            $table->text('location_created')->nullable();
            $table->longText('main_entity')->nullable();
            $table->text('maintainer')->nullable();
            // $table->mentions
            $table->text('producer')->nullable();
            $table->text('provider')->nullable();
            $table->text('publication');
            $table->longText('publishing_principles')->nullable();
            $table->text('source_organization')->nullable();
            $table->text('text');
            $table->text('thumbnail_url');
            $table->integer('time_required');
            $table->text('translation_of_work')->nullable();
            $table->text('translator')->nullable();
            $table->text('typical_age_range')->nullable();
            $table->float('version');
            // $table->video
            // $table->image
            $table->text('work_translation')->nullable();
            $table->text('media_embed')->nullable();
            $table->text('media_provider')->nullable();
            $table->text('media_ratio')->nullable();
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
