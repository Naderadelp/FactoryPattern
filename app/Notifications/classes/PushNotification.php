<?php

namespace App\Notifications\classes;

class PushNotification implements Notification
{
    public function send($to, $message)
    {
        logger("PUSH notification sent to {$to}: {$message}");
    }
}