<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = ['Chinese Food', 'India food', 'Myanmar Food', 'Breakfast'];
        foreach ($category as $data) {
            Category::create([
                'name' => $data,
            ]);
        }
    }
}
