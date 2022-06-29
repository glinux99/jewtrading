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
            return $this->from('interlab21@yahoo.com')
                ->subject($data['object'])
                ->markdown('admin.mail.clientMail')
                ->attachFromStorage('public/' . $data['image']);
        }
        return $this->from('interlab21@yahoo.com')
            ->subject("JEW TRADING CARS")
            ->markdown('admin.mail.clientMail');
    }
}
