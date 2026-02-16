<?php

namespace App\Notifications\Factory;

use App\Notifications\classes\EmailNotification;
use App\Notifications\classes\Notification;
use App\Notifications\Factory\NotificationFactory;

class EmailNotificationFactory extends NotificationFactory
{
    public function create():Notification
    {
        return new EmailNotification();
    }
}