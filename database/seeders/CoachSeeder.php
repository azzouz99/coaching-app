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
        $specialtiesPool = [
            ['Coaching Personnel', 'Développement Personnel'],
            ['Leadership', 'Management', 'Communication'],
            ['Formation', 'Pédagogie', 'Enseignement'],
            ['Fitness', 'Nutrition', 'Bien-être'],
            ['Business', 'Entrepreneuriat', 'Stratégie'],
            ['Mindfulness', 'Méditation', 'Relaxation'],
            ['Créativité', 'Innovation', 'Design Thinking'],
            ['Productivité', 'Organisation', 'Gestion du temps'],
            ['Relations', 'Communication', 'Intelligence émotionnelle']
        ];

        for ($i = 1; $i <= 9; $i++) {
            $coach = Coach::create([
                'name' => "Coach $i",
                'description' => "This is the description for Coach $i.",
                'photo' => "coaches/coach$i.jpg", // assuming you store images in storage/app/public/coaches/
                'specialties' => $specialtiesPool[($i - 1) % count($specialtiesPool)],
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
