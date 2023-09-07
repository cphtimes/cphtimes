<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

use App\Models\User;
use App\Models\Comment;

use App\Models\Section;

class Article extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public static function boot() {
        parent::boot();
        self::deleting(function($article) {
            $article->comments()->each(function($comment) {
                $comment->delete();
            });
        });
    }

    protected $table = 'article';

    protected $fillable = [
        'body_url',
        'published_at',
        'expires_at',
        'word_count',
        'recorded_at',
        'archived_at',
        'section_uri',
        'backstory',
        'word_count',
        'image_url',
        'image_caption',
        'video_embed',
        'video_provider',
        'video_ratio',
        'work_status',
        'author_id',
        'abstract',
        'about',
        'comment_count',
        'correction',
        'country_of_origin',
        'credit_text',
        'editor_id',
        'in_language',
        'headline_uri',
        'headline',
        'alternative_headline',
        'is_based_on',
        'keywords',
        'location_created',
        'license_url',
        'time_required',
        'time_required',
        'typical_age_range',
        'citation',
        'dateline',
        'speakable',
        'contributor_id',
        'copyright_holder',
        'copyright_notice',
        'copyright_year',
        'is_family_friendly',
        'publication',
        'publishing_principles',
        'translation_of_work',
        'translator_id',
        'is_accessible_for_free',
    ];

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'word_count' => 0,
        'video_ratio' => '16x9',
        'work_status' => 'published',
        'comment_count' => 0,
        'country_of_origin' => 'DK',
        'in_language' => 'da-DK',
        'typical_age_range' => '6-',
        'is_family_friendly' => true,
        'publication' => 'The Copenhagen Gates',
        'publishing_principles' => 'https://cphgates.com/about/publishing-principles',
        'is_accessible_for_free' => true,
    ];

    public function localizedSection($sections) {
        return $sections->where('uri', $this->section_uri)
                        ->where('language_code', \App::currentLocale())
                        ->first()->name ??
                        $this->section_uri;
    }

    public function related() {
        return $this->belongsToMany(Article::class, 'related_article', 'article_id', 'related_id');
    }

    public function section()
    {
        return Section::where('uri', $this->section_uri);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'reply_article_id', 'id');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id', 'id');
    }

    public function editor()
    {
        return $this->hasOne(User::class, 'editor_id', 'id');
    }

    public function contributor()
    {
        return $this->hasOne(User::class, 'contributor_id', 'id');
    }

    public function translator()
    {
        return $this->hasOne(User::class, 'translator_id', 'id');
    }
}
