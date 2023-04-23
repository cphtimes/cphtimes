<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserNotifications extends Model
{
    use HasFactory;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_notifications';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'article_comment_notifications',
        'reply_comment_notifications',
        'scheduled_meetings_notifications'
    ];

    /*
    **
    * The model's default values for attributes.
    *
    * @var array
    */
    protected $attributes = [
        'article_comment_notifications' => false,
        'reply_comment_notifications' => false,
        'scheduled_meetings_notifications' => false
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
