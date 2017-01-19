<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends DatabaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->cleanUp('users');

        User::create([
			"email" => "elieandraos31@gmail.com",
			"name" => "Elie Andraos",
			"password" => bcrypt("lynn662625"),
		]);
    }
}
