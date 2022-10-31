<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ClientMail extends Mailable
{
    use Queueable, SerializesModels;
    public $url = '/produits';
    public $data = [];
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data =  $this->data;
        if ($data['image']) {
            $mail = $this->from('clientele@jewstrading.com')
                ->subject($data['object'])
                ->markdown('admin.emails.ClientMail');
            foreach ($data['image'] as $image) {
                $mail->attachFromStorage('public/' . $image);
            }
            return $mail;
        }
        return $this->from('clientele@jewstrading.com')
            ->subject("JEW TRADING CARS")
            ->markdown('admin.emails.ClientMail');
    }
}
