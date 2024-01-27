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
            ],
            [
                'question' => 'Are you involved in any school clubs or organisations?',
                'options' => json_encode(['Yes, academic clubs', 'Yes, sports clubs', 'Yes, arts and creative clubs', 'No, I prefer individual activities','No, Im not involved in extracurricular activities']),
            ],
            [
                'question' => 'What is your favourite school subject?',
                'options' => json_encode(['Science', 'Humanities', 'Mathematics', 'Technology','Physical Education']),
                'correct_option' => 1,
            ],
            [
                'question' => 'What is your favourite school subject?',
                'options' => json_encode(['Science', 'Humanities', 'Mathematics', 'Technology','Physical Education']),
                'correct_option' => 1,
            ],
            [
                'question' => 'What is your favourite school subject?',
                'options' => json_encode(['Science', 'Humanities', 'Mathematics', 'Technology','Physical Education']),
                'correct_option' => 1,
            ],
            [
                'question' => 'What is your favourite school subject?',
                'options' => json_encode(['Science', 'Humanities', 'Mathematics', 'Technology','Physical Education']),
                'correct_option' => 1,
            ],
            
            
        ];

       
        Quiz::insert($quizzes);
    }
}

