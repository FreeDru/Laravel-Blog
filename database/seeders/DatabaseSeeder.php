<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $admin = \App\Models\User::where('email', 'admin@test.com')->count();
        
        if($admin == 0){
            \App\Models\User::factory()->create([
                'name' => 'Admin',
                'role' => 0,
                'email' => 'admin@test.com',
                'password' => Hash::make('admin'),
            ]);
        }

         \App\Models\User::factory(3)->create();

        $this->call([            
            CategorySeeder::class,
            PostSeeder::class,
            TagSeeder::class,
            PostTagSeeder::class,
            PostUserLikeSeeder::class,           
            CommentSeeder::class,
        ]);

    }
}
