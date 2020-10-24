<?php

namespace Database\Seeders;

use App\Models\Table;
use Illuminate\Database\Seeder;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tables = ['one', 'two', 'three', 'four', 'five'];
        foreach ($tables as $table) {
            Table::create([
                'name' => $table,
            ]);
        }

    }
}
