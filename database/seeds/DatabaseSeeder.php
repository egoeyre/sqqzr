<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
		// $this->call(TopicsTableSeeder::class);
		// $this->call(PapersTableSeeder::class);
		// $this->call(QuestionsTableSeeder::class);
		// $this->call(BlanksTableSeeder::class);
        // $this->call(ChoicesTableSeeder::class);
        $this->call(TopicsTableSeeder::class);
    }
}
