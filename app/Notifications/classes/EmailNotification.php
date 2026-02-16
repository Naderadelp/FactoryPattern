<?php

namespace App\Notifications\classes;

class EmailNotification implements Notification
{
    public function send($to, $message)
    {
        echo "Email sent to {$to}: {$message}";
    }
}