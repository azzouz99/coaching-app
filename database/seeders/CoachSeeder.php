<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Coach;
use App\Models\Video;
class CoachSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
               for ($i = 1; $i <= 9; $i++) {
            $coach = Coach::create([
                'name' => "Coach $i",
                'description' => "This is the description for Coach $i.",
                'photo' => "coaches/coach$i.jpg", // assuming you store images in storage/app/public/coaches/
            ]);

            Video::create([
                'coach_id' => $coach->id,
                'title' => "Session by Coach $i",
                'video_url' => "videos/coach$i.mp4", // adjust path as needed
                'duration' => rand(600, 1800), // 10-30 min
            ]);
        }
    }
}
