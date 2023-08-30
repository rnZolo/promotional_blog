<?php

use Illuminate\Database\Seeder;
// use Database\Factories\CommentsFactory;
use App\Comments;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    Factory(Comments::class, 5)->create();
    }
}
