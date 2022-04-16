<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailJobApplication extends Mailable
{
    use Queueable, SerializesModels;

    public $job_application_values;

    public function __construct($job_application_values)
    {
        $this->job_application_values = $job_application_values;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('Neue Bewerbung ist eingegangen')
            ->markdown('emails.home.job_application')
            ->with('job_application_values', $this->job_application_values);
    }
}
