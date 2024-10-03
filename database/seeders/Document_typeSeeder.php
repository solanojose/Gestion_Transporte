<?php

namespace Database\Seeders;

use App\Models\Document_type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Document_typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Document_type::create([
            'name' => "Cedula Ciudadania"
        ]);

        Document_type::create([
            'name' => "NIT"
        ]);
    }
}
