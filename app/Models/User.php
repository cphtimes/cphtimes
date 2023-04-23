<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Comment;
use App\Models\Article;
use App\Models\UserNotifications;
use App\Notifications\ResetPasswordToken;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public static function boot() {
        parent::boot();
        self::deleting(function($user) {
            $user->notifications()->delete();
            $user->comments()->each(function($comment) {
                $comment->article()->decrement('comment_count');
                $comment->delete();
            });
            $user->articles()->each(function($article) {
                $article->delete();
            });
        });
    }

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'display_name',
        'email',
        'password',
        'photo_url',
        'country_code',
        'language_code',
        'timezone',
        'bio',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'is_banned',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /*
    **
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'is_banned' => false,
    ];

    /**
     * Add a mutator to ensure hashed passwords
     */

    /**
     * Send a password reset email to the user
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordToken($token, $this));
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function articles()
    {
        return $this->hasMany(Article::class, 'author_id', 'id');
    }

    public function notifications()
    {
        return $this->hasOne(UserNotifications::class);
    }
}
