<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Genre;
use Illuminate\Database\Seeder;
use Database\Seeders\FormatSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

    public $genres = [
        'classica',
        'blues',
        'rock',
        'pop',  
        'jazz',
        'metal',
        'soul',
        'punk',
        'reggae',
        'country',
        'rap',
        'disco',
        'funk',
        'ska',
        'indie',
        'r&b',
        'elettronica',
        'folk',
        'samba',
        'new wave',
        'prog',
        'psychedelic'
    ];

    public function run(): void
    {
        // User::factory(10)->create();

        // Genre::insert([
        //     ['name' => 'classica'], ['name' => 'blues'], ['name' => 'rock'], ['name' => 'pop'],  
        //     ['name' => 'jazz'], ['name' => 'metal'], ['name' => 'soul'], ['name' => 'punk'],
        //     ['name' => 'reggae'], ['name' => 'country'], ['name' => 'rap'], ['name' => 'disco'],
        //     ['name' => 'funk'], ['name' => 'ska'], ['name' => 'indie'], ['name' => 'r&b'],
        //     ['name' => 'elettronica'], ['name' => 'folk'], ['name' => 'samba'], 
        //     ['name' => 'new wave'], ['name' => 'prog'], ['name' => 'psychedelic']
        // ]);

        foreach ($this->genres as $genre) {
            Genre::create(['name' => $genre]);
        }

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call(FormatSeeder::class);
    }
}
