<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class email_list extends Mailable
{
    use Queueable, SerializesModels;
    public $msg;
    public function __construct($msg )
    {
        $this->msg = $msg;
    }
    public function build()
    {
        return $this->from('hamad_ala@yahoo.de ')->view('email.email_list');
    }
}
