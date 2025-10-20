<?php

namespace App\Mail;

use App\Models\Meeting;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MeetingInvitationMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public function __construct(
        public readonly Meeting $meeting,
        public readonly User $participant
    ) {
    }

    public function build(): self
    {
        return $this
            ->subject(__('دعوة للقاء: :subject', ['subject' => $this->meeting->subject]))
            ->view('emails.meetings.invitation')
            ->with([
                'meeting'    => $this->meeting,
                'participant'=> $this->participant,
            ]);
    }
}

