<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comments = [
            'Great news!',
            'I totally agree with this.',
            'This is very interesting.',
            'Not sure I agree with this.',
            'Can you provide more details?',
            'I have some doubts about this.',
            'This is a game-changer!',
            'Thanks for sharing this information.',
            'Looking forward to more updates.',
            'This doesn\'t seem right to me.'
        ];

        for ($i = 1; $i <= 5; $i++) {
            $n = rand(1, 3);
            for($j = 0; $j < $n; $j++) {
                $student_id = rand(1, 3);
                DB::table('news_comments')->insert([
                    'news_id' => $i,
                    'student_id' => $student_id,
                    'comment' => $comments[array_rand($comments)],
                ]);
            }
        }
    }
}
