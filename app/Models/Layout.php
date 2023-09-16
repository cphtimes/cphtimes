<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layout extends Model
{
    use HasFactory;

     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'layout';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'section_uri',
        'article_id',
        'position',
    ];

    public function article() {
        return $this->hasMany(Article::class, 'id', 'article_id');
    }

}
