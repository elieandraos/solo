<?php

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypesTableSeeder extends DatabaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->cleanUp('types');

        Type::create(['name' => 'Open']);
        Type::create(['name' => 'In Progress']);
        Type::create(['name' => 'Completed']);
    }
}
