<?php

namespace App\Http\Controllers;

use App\Jobs\SendMeetingInvitationsJob;
use App\Models\Meeting;
use App\Models\User;
use Illuminate\Http\Request;

class MeetingController extends Controller
{
    public function index()
    {
        $meetings = Meeting::withCount('participants')
            ->where('meet_at', '>', now())
            ->orderByDesc('meet_at')
            ->paginate(12);

        return view('meetings.index', compact('meetings'));
    }

    public function create()
    {
        $users = User::orderBy('name')->get(['id', 'name', 'email']);

        return view('meetings.create', compact('users'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'subject'   => ['required', 'string', 'max:255'],
            'meet_url'  => ['required', 'url', 'max:255'],
            'meet_at'   => ['required', 'date', 'after:now'],
            'email_at'  => ['required', 'date', 'after_or_equal:now', 'before_or_equal:meet_at'],
            'user_ids'  => ['required', 'array', 'min:1'],
            'user_ids.*'=> ['integer', 'exists:users,id'],
        ], [], [
            'subject'  => __('موضوع اللقاء'),
            'meet_url' => __('رابط اللقاء'),
            'meet_at'  => __('موعد اللقاء'),
            'email_at' => __('وقت إرسال البريد'),
            'user_ids' => __('قائمة المستلمين'),
        ]);

        $meeting = Meeting::create([
            'subject'    => $data['subject'],
            'meet_url'   => $data['meet_url'],
            'meet_at'    => $data['meet_at'],
            'email_at'   => $data['email_at'],
            'created_by' => $request->user()->id,
        ]);

        $meeting->participants()->sync($data['user_ids']);

        SendMeetingInvitationsJob::dispatch($meeting->id)->delay($meeting->email_at);

        return redirect()
            ->route('meetings.index')
            ->with('success', __('تم إنشاء اللقاء بنجاح وسيتم إرسال الدعوات في الوقت المحدد.'));
    }
}

