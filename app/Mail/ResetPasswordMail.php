<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Carbon;

class ResetPasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($link)
    {
        $this->link = $link;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $tanggal = Carbon::now()->format("d F Y H:i:s");

        return $this->subject("Reset Password")
                    ->view('email.resetpassword')
                    ->with([
                        'link'=>$this->link,
                        'tanggal'=>$tanggal
                    ]);
    }
}
