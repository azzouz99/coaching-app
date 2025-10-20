<?php

namespace App\Jobs;

use App\Mail\MeetingInvitationMail;
use App\Models\Meeting;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendMeetingInvitationsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(public readonly int $meetingId)
    {
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $meeting = Meeting::with('participants')->find($this->meetingId);

        if (! $meeting) {
            return;
        }

        if ($meeting->email_sent_at) {
            return;
        }

        foreach ($meeting->participants as $participant) {
            Mail::to($participant->email)->send(new MeetingInvitationMail($meeting, $participant));
        }

        $meeting->forceFill([
            'email_sent_at' => now(),
        ])->save();
    }
}

