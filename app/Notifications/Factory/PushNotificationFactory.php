<?php

namespace App\Notifications\Factory;

use App\Notifications\classes\Notification;
use App\Notifications\classes\PushNotification;

class PushNotificationFactory extends NotificationFactory
{
    public function create(): Notification
    {
        return new PushNotification();
    }
}