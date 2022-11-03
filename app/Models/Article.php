<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'dateline',
        'article_body',
        'article_section',
        'word_count',
        'about',
        'abstract',
        'accountable_person',
        'author',
        // 'citation',
        // 'comment',
        'date_published',
        'headline',
        'headline_lowercase',
        'in_language',
        // 'keywords',
        // 'mentions',
        'publisher',
        'text',
        'thumbnail_url',
        'thumbnail_caption',
        'time_required',
        // 'video',
        // 'image',
        'media_embed',
        'media_provider',
        'media_ratio'
    ];

    protected $attributes = [
        'is_accessible_for_free' => true,
        'is_family_friendly' => true,
        // 'comment_count' => 0,
        'copyright_holder' => 'The Copenhagen Gates',
        'copyright_notice' => 'This is a notice on the copyright.',
        'author' => 'Daniel Ran Lehmann',
        'creator' => 'Daniel Ran Lehmann',
        'license' => 'Creative Commons',
        'maintainer' => 'Daniel Ran Lehmann',
        'publication' => 'The Copenhagen Gates',
        'translator' => 'Daniel Ran Lehmann',
        'typical_age_range' => '1-99',
        'version' => 1.0
    ];

    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_modified';

    protected $table = 'article';
    protected $primaryKey = 'id';
    public $incrementing = true;

    protected $dates = ['date_created', 'date_modified', 'date_published'];

}
