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

        Type::create([
            'name'  => 'Open',
            'color' => 'bg-red-400',
            'icon'  => 'wb-signal',
        ]);

        Type::create([
            'name'  => 'In Progress',
            'color' => 'bg-indigo-400',
            'icon'  => 'wb-graph-up',
        ]);

        Type::create([
            'name'  => 'Completed',
            'color' => 'bg-green-400',
            'icon'  => 'wb-check-circle',
        ]);
    }
}
