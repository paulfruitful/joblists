<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class Successfulapplication extends Notification
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
                    ->greetings('You Have Successfully Applied To'.' '.$this->company)
                    ->line('Your application ')
                    ->action('Apply For More', url('/'))
                    ->line('Thank you for trusting us!');
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
