<?php

namespace App\Notifications\classes;

class SmsNotification implements Notification
{
    public function send($to, $message)
    {
        logger("SMS sent to {$to}: {$message}");
    }
}