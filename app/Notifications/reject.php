<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class reject extends Notification
{
    use Queueable;
    private $application;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($application)
    {
        //
        $this->application=$application;
        $this->name=$this->application->name;
        
        $this->company=$this->application->listing->company;
        
        $this->title=$this->application->listing->title;
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
                    ->subject('Update on your Application to'.' '. $this->company)
                    ->greeting('Dear,'.' '.$this->name)
                    ->line('Unfortunately your application for the '.' '.$this->title.' '.'position was not accepted.')
                    ->line('We are sorry for turning your application down but it was due to the reason the position was not available for you')
                    ->line('We wish you goodluck in your future endeavours.')
                    ->action('Search For Jobs', url('/listings'))
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
