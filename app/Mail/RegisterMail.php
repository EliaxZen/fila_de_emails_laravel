<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegisterMail extends Mailable
{
    use Queueable, SerializesModels;

    private $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $qualquerNome)
    {
        //
        $this->user = $qualquerNome;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $this->subject('Assunto do Email');
        $this->from('reply@gmail.com', 'Reply Bot');
        $this->replyTo('galvaoalveselias@gmail.com');
        
        return $this->view('Mail.registerMail', [
            'nome' => $this->user->name,
        ]);
    }
}
