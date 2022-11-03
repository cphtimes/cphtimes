<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Individual extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'short_description',
        'description',
        'avatar_url'
    ];

    protected $table = 'individual';
    protected $primaryKey = 'id';
    public $incrementing = true;
}
