<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <=10 ; $i++) {             
            \App\Models\Tag::factory()->create([
                'title' => 'tag' . ' ' . $i,
            ]);
        }
    }
}
