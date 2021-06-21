<?php

use App\Question;
use App\Response;
use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 5)->create()->each(function ($user) {

            $questions = Question::all();

            foreach ($questions as $key => $value) {
                $response = Response::where('question_id', $value->id)->get()->random();
                $user->responses()->attach([
                    'response_id' => $response->id
                ]);
            }
        });
    }
}
