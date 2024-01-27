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
                'question' => 'What is your favourite school subject?',
                'options' => json_encode(['Science', 'Humanities', 'Mathematics', 'Technology','Physical Education']),
            ],
            [
                'question' => 'Are you involved in any school clubs or organisations?',
                'options' => json_encode(['Yes, academic clubs', 'Yes, sports clubs', 'Yes, arts and creative clubs', 'No, I prefer individual activities','No, Im not involved in extracurricular activities']),
            ],
            [
                'question' => 'Have you thought about what you might want to study in college or pursue as a career??',
                'options' => json_encode(['Yes, a science-related field', 'Yes, a humanities-related field', 'MathemYes, a business-related fieldatics', 'No, I havent decided yet',"No, I don't plan to go to college"]),
            ],
            [
                'question' => 'How comfortable are you with using technology and various software applications?',
                'options' => json_encode(['Very comfortablece', 'Somewhat comfortable', 'Neutral', 'Not very comfortable','Not comfortable at all']),
            ],
            [
                'question' => 'What type of books do you enjoy reading the most?',
                'options' => json_encode(['Fiction', 'Non-fiction', 'Mystery/Thriller', 'Science fiction',"I don't enjoy reading books'"]),

            ],
            [
                'question' => 'Do you enjoy solving puzzles or brain teasers?',
                'options' => json_encode(['Yes, I love them', "Sometimes, if they're not too challenging", 'Not really, I find them frustrating', 'No, I prefer straightforward tasks',"I've never tried solving puzzles"]),
            ],
            [
                'question' => 'Have you ever come up with a business idea or participated in any entrepreneurial activities?',
                'options' => json_encode(['Yes, and I enjoyed it', "Yes, but I didn't enjoy it", "No, but I'm interested in trying", "No, and I'm not interested","I haven't thought about it"]),
            ],
            [
                'question' => 'Are you actively involved in any community service or volunteer work?',
                'options' => json_encode(["Yes, regularly", "Occasionally", "Rarely", "No, but I'm interested","No, I'm not interested"]),
            ],
            [
                'question' => 'Are there specific goals you have set for yourself in the next few years?',
                'options' => json_encode(["Yes, academic goals", "Yes, personal development goals", "Yes, career-related goals", "No, I prefer to go with the flow","No, I haven't thought about it"]),
            ],
            [
                'question' => 'Do you prefer hands-on learning experiences or theoretical concepts?',
                'options' => json_encode(["Hands-on", "Theoretical", "Both, depending on the subject", "I'm not sure","I don't have a preference"]),
            ],
            [
                'question' => 'Are you interested in health and wellness activities, such as fitness or mindfulness practices?',
                'options' => json_encode(["Yes, very interested", "Somewhat interested", "Neutral", "Not very interested","Not interested at all"]),
            ],
            [
                'question' => 'Do you enjoy expressing yourself through art, writing, or other creative outlets?',
                'options' => json_encode(["Yes, I love it", "Sometimes, when I'm in the mood", "Not really, but I appreciate it in others", "No, I'm not creative","I've never tried"]),
            ],
            [
                'question' => 'Are you curious about scientific discoveries and technological advancements?',
                'options' => json_encode(["Yes, very curious", "Somewhat curious", "Neutral", "Not very curious","Not curious at all"]),
            ],
            [
                'question' => 'Have you held leadership roles in school or community activities?',
                'options' => json_encode(["Yes, multiple times", "Yes, but only once", "No, but I enjoy working in a team", "No, I prefer working independently","No, I haven't had the opportunity"]),
            ],
            [
                'question' => 'Are you passionate about environmental issues or sustainability?',
                'options' => json_encode(["Yes, very passionate", "Somewhat passionate", "Neutral", "Not very passionate","Not passionate at all"]),
            ],
            [
                'question' => 'Are there specific skills or knowledge areas you would like to learn more about?',
                'options' => json_encode(["Yes, technical skills", "Yes, creative skills", "Yes, business-related skills", "No, I'm content with what I know","No, I haven't thought about it"]),
            ],
            [
                'question' => 'How do you feel about emerging technologies, such as artificial intelligence or virtual reality?',
                'options' => json_encode(["Excited about it", "Neutral", "Skeptical", "Not interested","I haven't thought about it"]),
            ],
            [
                'question' => 'Do you have an interest in learning about different cultures and global perspectives?',
                'options' => json_encode(["Yes, very interested", "Somewhat interested", "Neutral", "Not very interested","Not interested at all"]),
            ],
            [
                'question' => 'What motivates you to succeed, both academically and personally?',
                'options' => json_encode(["Intrinsic motivation (personal satisfaction)", "Extrinsic motivation (recognition from others)", "Both", "I'm not sure","I'm not sure"]),
            ],
            [
                'question' => 'How would you describe your strengths and areas for improvement?',
                'options' => json_encode(["Self-aware and reflective", "Somewhat self-aware", "Not very self-aware", "I don't know","I haven't thought about it"]),
            ],
            
            
        ];

       
        Quiz::insert($quizzes);
    }
}

