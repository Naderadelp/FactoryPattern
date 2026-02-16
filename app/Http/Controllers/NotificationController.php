<?php

namespace App\Http\Controllers;

use App\Notifications\NotificationManager;

class NotificationController extends Controller
{
    public function __construct(private NotificationManager $notifications)
    {
    }

    public function send()
    {
        $this->notifications->send('email', 'test@test.com', 'Welcome!');
    }
}
