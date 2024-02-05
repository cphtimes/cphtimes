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

class ResetPassword extends Mailable
{
    use Queueable, SerializesModels, MailerSendTrait;

    /**
     * The order instance.
     *
     * @var \App\Models\User
     */
    protected $user;
    protected $token;

    /**
     * Create a new message instance.
     *
     * @param  \App\Models\User $user
     * @return void
     */
    public function __construct($token, User $user)
    {
        $this->token = $token;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $confirmationURL = route('reset_password_token', ['token' => $this->token]);

        return $this->view('emails.reset-password')
            ->with([
                'DISPLAY_NAME' => $this->user->display_name,
                'APP_NAME' => env('APP_NAME', 'The Copenhagen Gates'),
                'EMAIL' => $this->user->email,
                'CONFIRMATION_URL' => $confirmationURL,
            ]);
    }
}
