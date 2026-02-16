<?php

namespace App\Notifications\Factory;

use App\Notifications\classes\Notification;


abstract class NotificationFactory
{
    abstract public function create(): Notification;

    public function sendNotification($to, $message)
    {
        $notification = $this->create();
        $notification->send($to, $message);
    }
}