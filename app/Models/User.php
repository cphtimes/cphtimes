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
use App\Models\UserRole;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public static function boot()
    {
        parent::boot();
        self::deleting(function ($user) {
            $user->notifications()->delete();
            $user->comments()->each(function ($comment) {
                $comment->article()->decrement('comment_count');
                $comment->delete();
            });
            $user->articles()->each(function ($article) {
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
        'reads_languages',
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
        'reads_languages' => 'array',
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

    public function getUsername()
    {
        return $this->username;
    }

    public function getDisplayName()
    {
        return $this->display_name;
    }

    public function getBio()
    {
        return $this->bio;
    }

    public function getPhotoURL()
    {
        return $this->photo_url;
    }

    public function articles()
    {
        // return $this->hasMany(Article::class, 'author_id', 'user_id');
        return $this->hasOneThrough(
            Article::class,
            Author::class,
            'user_id',
            'author_id',
            'id',
            'id'
        );
    }

    public function canEdit($article)
    {
        return $this->id == $article->author->user_id ||
            $this->id == $article->editor_id;
    }

    // do the same for canDelete as canEdit?

    public function notifications()
    {
        return $this->hasOne(UserNotifications::class);
    }

    public function role()
    {
        return $this->hasOne(UserRole::class);
    }

    public function getReadsLanguagesStr()
    {
        $str = join('+', $this->reads_languages);
        return $str;
    }

    /*
    @foreach([
    "en" => __('messages.english'),
    "da" => __('messages.danish'),
    "da+en" => __('messages.danish_and_english')
    )] as $value=>$text)

    @if ($value == $currentUser->getReadsLanguageStr())
    <option value="{{$value}}" selected>{{$text}}</option>
    @else
    <option value="{{$value}}">{{$text}}</option>
    @endif

    @endforeach
    */
}
