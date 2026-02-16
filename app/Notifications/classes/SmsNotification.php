<?php

namespace App\Notifications\classes;

class SmsNotification implements Notification
{
    public function send($to, $message)
    {
        echo "SMS sent to {$to}: {$message}";
    }
}