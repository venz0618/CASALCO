<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class MembershipApplicationNotification extends Notification
{
    use Queueable;
    private $membership;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($membership)
    {
        $this->membership=$membership;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->greeting($this->membership['greeting'])
                    ->line($this->membership['body'])
                    ->line($this->membership['second'])
                    ->action($this->membership['actiontext'], $this->membership['actionurl'])
                    ->line($this->membership['lastline']);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
