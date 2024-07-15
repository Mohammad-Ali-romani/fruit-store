<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Tags;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $factor = Factory::create();
        foreach (range(0,5) as $i){
            Category::create([
                'name'      =>      $factor->text,
                'calor'     =>      $factor->text,
            ]);
            Tags::create([
                'name'      =>       $factor->text,
            ]);
        }
    }
}
