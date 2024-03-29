<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Category;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    
        Category::create([
            'name' => 'Music',
            'slug' => 'music'
        ]);
        Category::create([
            'name' => 'Lifestyle',
            'slug' => 'lifestyle'
        ]);
        Category::create([
            'name' => 'Game',
            'slug' => 'game'
        ]);
        Category::create([
            'name' => 'Kpop',
            'slug' => 'kpop'
        ]);
        Category::create([
            'name' => 'Rock',
            'slug' => 'rock'
        ]);
        Category::create([
            'name' => 'Japan',
            'slug' => 'japan'
        ]);
        Category::create([
            'name' => 'Anime',
            'slug' => 'anime'
        ]);
        Category::create([
            'name' => 'Techonology',
            'slug' => 'techonology'
        ]);
        Category::create([
            'name' => 'Sains',
            'slug' => 'sains'
        ]);
        Category::create([
            'name' => 'Nature',
            'slug' => 'nature'
        ]);
        Category::create([
            'name' => 'Food',
            'slug' => 'food'
        ]);
        Category::create([
            'name' => 'Travel',
            'slug' => 'travel'
        ]);
        Category::create([
            'name' => 'Health',
            'slug' => 'health'
        ]);
        Category::create([
            'name' => 'Sports',
            'slug' => 'sports'
        ]);
        Category::create([
            'name' => 'Art',
            'slug' => 'art'
        ]);
        Category::create([
            'name' => 'Entertainment',
            'slug' => 'entertainment'
        ]);
        Category::create([
            'name' => 'Animal',
            'slug' => 'animal'
        ]);
        Category::create([
            'name' => 'Fashion',
            'slug' => 'fashion'
        ]);
        Category::create([
            'name' => 'Design',
            'slug' => 'design'
        ]);
        Category::create([
            'name' => 'Photography',
            'slug' => 'photography'
        ]);
    }
}