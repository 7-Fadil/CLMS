<?php

namespace App\Notifications;

use App\Models\BorrowBooks;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OverdueBookNotification extends Notification
{
    use Queueable;

    protected $borrowing;
    /**
     * Create a new notification instance.
     */
    public function __construct(BorrowBooks $borrowing)
    {
        $this->borrowing = $borrowing;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->subject('Overdue Book Notice')
                    ->line('Dear ' . $notifiable->name . ',')
                    ->line('This is a reminder that the following book is overdue:')
                    ->line('Book Title: ' . $this->borrowing->book->book->title)
                    ->line('Due Date: ' . $this->borrowing->due_date)
                    ->line('Please return the book as soon as possible.')
                    ->line('Thank you for your prompt attention to this matter.');
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
