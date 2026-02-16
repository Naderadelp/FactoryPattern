<?php

namespace App\Notifications\Factory;

use App\Notifications\classes\Notification;
use App\Notifications\classes\SmsNotification;
use App\Notifications\Factory\NotificationFactory;


class SmsNotificationFactory extends NotificationFactory
{
    public function create():Notification
    {
        return new SmsNotification();
    }
}