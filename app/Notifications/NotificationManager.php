<?php

namespace App\Notifications;

use App\Notifications\Factory\EmailNotificationFactory;
use App\Notifications\Factory\SmsNotificationFactory;
use App\Notifications\Factory\PushNotificationFactory;
use App\Notifications\Factory\NotificationFactory;
use InvalidArgumentException;

class NotificationManager
{
    public function resolve(string $type): NotificationFactory
    {
        return match ($type) {
            'email' => app(EmailNotificationFactory::class),
            'sms'   => app(SmsNotificationFactory::class),
            'push'  => app(PushNotificationFactory::class),
            default => throw new InvalidArgumentException("Unsupported notification type: {$type}"),
        };
    }

    public function send(string $type, string $to, string $message): void
    {
        $factory = $this->resolve($type);
        $factory->sendNotification($to, $message);
    }
}
