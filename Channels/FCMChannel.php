<?php

namespace App\Notifications\Channels;

use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Http;

class FCMChannel
{
    private $serverKey;
    private $endPoint;

    public function __construct()
    {
        $this->serverKey = config('firebase.fcm.serverKey');
        $this->endPoint = config('firebase.fcm.endPoint');
    }

    public function send($notifiable, Notification $notification)
    {
        $message = $notification->toFcm($notifiable);
        $response = Http::withHeaders([
            "Authorization" => "Bearer $this->serverKey",
            "Content-Type" => "application/json"
        ])->post($this->endPoint, $message);

    }
}
