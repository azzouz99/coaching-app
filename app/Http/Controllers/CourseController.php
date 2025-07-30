<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
class CourseController extends Controller
{
  public function secureViewer(Course $course)
{
    $filePath = $course->course_url;

    if (!$filePath || !Storage::disk('s3')->exists($filePath)) {
        abort(404);
    }

    $extension = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));
    $mime = Storage::disk('s3')->mimeType($filePath);

    // Stream only if PDF
    if ($extension === 'pdf') {
        $stream = Storage::disk('s3')->readStream($filePath);
        return Response::stream(function () use ($stream) {
            fpassthru($stream);
        }, 200, [
            "Content-Type" => $mime,
            "Content-Disposition" => "inline; filename=" . basename($filePath)
        ]);
    }

    // Otherwise: redirect to Office Viewer for Word, Excel, PowerPoint
    $url = Storage::disk('s3')->temporaryUrl($filePath, now()->addMinutes(30));
    $viewerUrl = 'https://view.officeapps.live.com/op/embed.aspx?src=' . urlencode($url);

    return view('course.office_viewer', compact('viewerUrl'));
}
}
