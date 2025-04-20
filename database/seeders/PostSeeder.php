<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   

        
        
        for ($i = 0; $i < 100; $i++) {        
        DB::table('posts')->insert([
            'title' => Str::random(15),
            'body' => Str::random(15),
            'create_by' => str::random(15),
        ]);
    }

    // Post::factory(50)->create();

    }
}
