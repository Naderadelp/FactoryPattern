<?php

namespace App\Notifications\classes;

interface Notification
{
    public function send($recipient, $message);
}

