<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AboutUsMailable extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $template_mail_name = "About Us Mailable Template";
    public $name;
    public $furigana;
    public $mail_address;
    public $tel_number;
    public $toiawase_content;

    /**
     * AboutUsMailable constructor.
     * @param string $template_mail_name
     * @param $name
     * @param $furigana
     * @param $mail_address
     * @param $tel_number
     * @param $toiawase_content
     */
    public function __construct($name, $furigana, $mail_address, $tel_number, $toiawase_content)
    {
        $this->name = $name;
        $this->furigana = $furigana;
        $this->mail_address = $mail_address;
        $this->tel_number = $tel_number;
        $this->toiawase_content = $toiawase_content;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = "Mail From About Us Page";

        return $this->view('layouts.frontend.partial.template_mail.about_us_mailable')
                    ->with("template_mail_name", $this->template_mail_name)
                    ->with("name", $this->name)
                    ->with("furigana", $this->furigana)
                    ->with("mail_address", $this->mail_address)
                    ->with("tel_number", $this->tel_number)
                    ->with("toiawase_content", $this->toiawase_content)
                    ->subject($subject);
    }
}
