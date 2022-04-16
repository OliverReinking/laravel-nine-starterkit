<?php

namespace App\Jobs;

use Mail;
use Illuminate\Bus\Queueable;
use App\Mail\MailJobApplication;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class SendMailJobApplication implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $job_application_values;

    public function __construct($job_application_values)
    {
        $this->job_application_values = $job_application_values;
    }

    public function handle()
    {
        $email = new MailJobApplication($this->job_application_values);
        Mail::to(config('newspilot.mail.job_application'))
            ->send($email);
    }
}
