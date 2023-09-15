<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'role'
    ];

    protected $attributes = [
        'role' => 'reader'
    ];

    protected $table = 'user_role';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
}
