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
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    // Define the database notification structure
    public function toDatabase($notifiable)
    {
        return [
            'message' => 'Your borrowed book "' . $this->borrowing->book->books_name . '" is overdue.',
            'book_title' => $this->borrowing->book->author,
            'due_date' => $this->borrowing->due_date,
        ];
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
