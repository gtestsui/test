<?php

namespace App\Notifications;

use App\Notifications\Builders\FCMDataBuilder;
use App\Notifications\Builders\FCMMessageBuilder;
use App\Notifications\Builders\FCMNotificationBuilder;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;

class TestNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['fcm'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toFcm(object $notifiable)
    {
        return (new FCMMessageBuilder)
            ->registrationIds((array) $notifiable)
            ->notification((new FCMNotificationBuilder)
                    ->title("New Message")
                    ->body("You have a new message")
            );
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
