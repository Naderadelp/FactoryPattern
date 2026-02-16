<?php

namespace App\Notifications\classes;

class EmailNotification implements Notification
{
    public function send($to, $message)
    {
        logger("EMAIL sent to {$to}: {$message}");
    }
}