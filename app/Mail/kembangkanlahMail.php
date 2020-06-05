<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Str;

class kembangkanlahMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $rand = Str::random();
        return $this
            ->from('info@bintangtobing.com', 'Featured Voted #' . $rand . '.')
            ->subject('Kamu berhasil! Ada lagi orang yang mendukungmu untuk membuat fitur ini.')
            ->markdown('emails.sites.kembangkanlah');
    }
}
