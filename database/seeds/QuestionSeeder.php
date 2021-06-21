<?php

use App\Question;
use App\Response;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 5; $i++) {
            factory(Question::class)->create([
                'question' => 'C\'est une question ' . $i
            ]);

            for ($y = 1; $y <= 5; $y++) {
                factory(Response::class)->create([
                    'question_id' => $i,
                    'response' => 'C\'est une réponse ' . $y
                ]);
            }
        }
    }
}
