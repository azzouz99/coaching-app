<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use App\Models\Course;
use App\Support\BunnyEmbed;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class ZaytounaCourseController extends Controller
{
    public function index()
    {
        $courses = Course::query()
            ->zaytouna()
            ->orderBy('id')
            ->get();

        return view('zaytouna.index', [
            'courses' => $courses,
            'lessonsCount' => $courses->count(),
        ]);
    }

    public function show(Course $course)
    {
        abort_unless($course->isZaytouna(), 404);

        $lessons = Course::query()
            ->zaytouna()
            ->orderBy('id')
            ->get();

        $currentLessonIndex = $this->resolveLessonPosition($lessons, $course);

        $videoSrc = $this->resolveBunnySrc($course->video_url);

        return view('zaytouna.show', [
            'course' => $course,
            'lessons' => $lessons,
            'lessonsCount' => $lessons->count(),
            'currentLessonIndex' => $currentLessonIndex,
            'videoSrc' => $videoSrc,
        ]);
    }

    public function create()
    {
        $coaches = Coach::orderBy('name')->get();

        return view('zaytouna.create', [
            'coaches' => $coaches,
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'coach_id' => ['required', 'exists:coaches,id'],
            'course_url' => ['nullable', 'string', 'max:2048'],
            'video_url' => ['nullable', 'string', 'max:2048'],
        ]);

        $data['type'] = 'zaytouna';

        $course = Course::create($data);

        return redirect()
            ->route('zaytouna.show', $course)
            ->with('status', __('Lecon creee avec succes.'));
    }

    private function resolveLessonPosition(Collection $lessons, Course $course): int
    {
        $position = $lessons->search(function (Course $item) use ($course) {
            return $item->id === $course->id;
        });

        return $position === false ? 1 : $position + 1;
    }

    private function resolveBunnySrc(?string $videoReference): ?string
    {
        $videoId = $this->extractBunnyVideoId($videoReference);

        return $videoId ? BunnyEmbed::signedIframeSrc($videoId) : null;
    }

    private function extractBunnyVideoId(?string $value): ?string
    {
        if (empty($value)) {
            return null;
        }

        $candidate = trim($value);

        $path = parse_url($candidate, PHP_URL_PATH);
        if ($path) {
            $candidate = trim(basename($path));
        }

        $candidate = preg_replace('/\.[^.]+$/', '', $candidate ?? '');

        return $candidate !== '' ? $candidate : null;
    }
}
