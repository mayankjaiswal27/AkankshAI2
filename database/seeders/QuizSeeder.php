<?php



namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Quiz;

class QuizSeeder extends Seeder
{
    public function run()
    {
        
        Quiz::truncate();

        
        $quizzes = [
            [
                'question' => 'First?',
                'options' => json_encode(['Science', 'Humanities', 'Mathematics', 'Technology','Physical Education']),
                'correct_option' => 1,
            ],
            [
                'question' => 'Second?',
                'options' => json_encode(['Science', 'Humanities', 'Mathematics', 'Technology','Physical Education']),
                'correct_option' => 1,
            ],
            [
                'question' => 'Third?',
                'options' => json_encode(['Science', 'Humanities', 'Mathematics', 'Technology','Physical Education']),
                'correct_option' => 1,
            ],
            [
                'question' => 'Fourth?',
                'options' => json_encode(['Science', 'Humanities', 'Mathematics', 'Technology','Physical Education']),
                'correct_option' => 1,
            ],
            [
                'question' => 'Fifth?',
                'options' => json_encode(['Science', 'Humanities', 'Mathematics', 'Technology','Physical Education']),
                'correct_option' => 1,
            ],
            
            
        ];

       
        Quiz::insert($quizzes);
    }
}

