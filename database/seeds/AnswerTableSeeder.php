<?php

use Illuminate\Database\Seeder;

class AnswerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = App\User::inRandomOrder();
        for ($i = 1; $i <= 10; $i++) {
            $users->each(function ($user) {
                $question = App\Question::inRandomOrder()->first();
                $answer = factory(\App\Answer::class)->make();
                $answer->user()->associate($user);
                $answer->question()->associate($question);
                $answer->save();
            });
        }
    }
}
