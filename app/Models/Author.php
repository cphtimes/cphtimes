<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'display_name',
        'username',
        'is_anonymous'
    ];

    protected $attributes = [
        'is_anonymous' => false
    ];

    protected $table = 'author';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;

    public function user() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
