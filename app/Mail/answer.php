<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class answer extends Mailable
{
    use Queueable, SerializesModels;
    public $answer;
    public function __construct($answer )
    {
        $this->answer = $answer;
    }
    public function build()
    {
        return $this->from('hamad_ala@yahoo.de ')->view('email.answer');
    }
}
