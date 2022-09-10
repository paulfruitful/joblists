<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class Successfulapplication extends Notification implements ShouldQueue
{
    use Queueable;
    private $name;
    
    private $company;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($name,$company)
    {
        $this->name=$name;
        $this->company=$company;
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
                    ->subject('Congratulations'.' '.$this->name.' '.'On Your Successful Application!')
                    ->greeting('You Have Successfully Applied To'.' '.$this->company)
                    ->line('Your application has been sent successfully to'.' '.$this->company)
                    ->line('You can keep applying to other jobs while waiting for a response from'.' '.$this->company)
                    ->action('Apply For More Jobs', url('/'))
                    ->line('We wish you goodluck!');
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
