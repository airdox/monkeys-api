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
        $questions = [
            [
                'question' => 'D\'où viennent principalement vos idées recettes ?',
                'responses' => [
                    'Mes réseaux sociaux préférés',
                    'Mes émissions favorites',
                    'Le bon livre de recette',
                    'Oups, je n\'ai jamais d\'idée'
                ]
            ],
            [
                'question' => 'Quelles sont vos habitudes alimentaires ?',
                'responses' => [
                    'Végétarien',
                    'J\'aime la cuisine du monde',
                    'Je suis un régime spécifique',
                    'Je mange de tout !'
                ]
            ],
            [
                'question' => 'Où faites-vous principalement vos courses alimentaires ?',
                'responses' => [
                    'En grande surface',
                    'J\'ai mes habitudes au marché',
                    'Je me fais livrer',
                    'Le magasin du bout de la rue'
                ]
            ],
            [
                'question' => 'Les aliments périmés au frigo ça vous arrive ?',
                'responses' => [
                    'Assez souvent, malheureusement',
                    'Rarement, heureusement',
                    'Jamais, au grand jamais !',
                    'Je ne sais pas'
                ]
            ],
            [
                'question' => 'Qui porte la toque à la maison ?',
                'responses' => [
                    'C\'est moi le chef !',
                    'Je préfère déléguer...',
                    'Une personne m\'aide à la maison',
                    'Personne ne cuisine ici'
                ]
            ]
        ];

        foreach ($questions as $key => $question) {
            factory(Question::class)->create([
                'question' => $question['question']
            ]);

            foreach ($question['responses'] as $response) {
                factory(Response::class)->create([
                    'question_id' => $key + 1,
                    'response' => $response
                ]);
            }
        }
    }
}
