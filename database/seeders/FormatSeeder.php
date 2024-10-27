<?php

namespace Database\Seeders;

use App\Models\Format;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FormatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public $formats = [
        'vinile',
        'cd',
        'cassetta',
    ];

    public function run(): void
    {
        foreach ($this->formats as $format) {
            Format::create(['name' => $format]);
        }
    }
}
