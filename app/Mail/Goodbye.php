<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Arr;
use MailerSend\Helpers\Builder\Variable;
use MailerSend\Helpers\Builder\Personalization;
use MailerSend\LaravelDriver\MailerSendTrait;
use Carbon\Carbon;

class Goodbye extends Mailable
{
    use Queueable, SerializesModels, MailerSendTrait;

    /**
     * The order instance.
     *
     * @var \App\Models\User
     */
    protected $user;

    /**
     * Create a new message instance.
     *
     * @param  \App\Models\User $user
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
        $this->subject = 'Goodbye';
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $confirmationURL = route('register');

        return $this->view('emails.goodbye')
            ->with([
                'DISPLAY_NAME' => $this->user->display_name,
                'APP_NAME' => env('APP_NAME', 'The Copenhagen Gates'),
                'CONFIRMATION_URL' => $confirmationURL
            ]);
    }
}
