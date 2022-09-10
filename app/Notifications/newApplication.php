<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class newApplication extends Notification implements ShouldQueue
{
    use Queueable;
    private $listing;
    private $application;
    

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($listing,$application)
    {
        $this->listing=$listing;
        $this->application=$application;
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
                    ->subject('You have a new application')
                    ->greeting('You Have A New Application')
                    ->line($this->application->name.' '.'Applied For The'.' '.$this->listing->title.' '.'Position At'.' '.$this->listing->company)
                    ->line('You can view the application from'.' '.$this->application->name.' '.'using the button below')
                    ->action('View Application', url('/applications/'.$this->application->id))
                    ->line('Thank you for using our application!');
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
