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

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function getUsername()
    {
        if ($this->is_anonymous) {
            return 'anonymous';
        }
        if ($this->user) {
            return $this->user->username;
        }
        return $this->username;
    }

    public function getDisplayName()
    {
        if ($this->is_anonymous) {
            return null;
        }
        if ($this->user) {
            return $this->user->display_name;
        }
        return $this->display_name;
    }

    public function getBio()
    {
        if ($this->is_anonymous) {
            return null;
        }
        if ($this->user == null) {
            return null;
        }
        return $this->user->bio;
    }

    public function getPhotoURL()
    {
        if ($this->user == null) {
            return null;
        }
        return $this->user->photo_url;
    }
}
