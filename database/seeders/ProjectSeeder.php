<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        // Supprimer les projets existants (optionnel)
        Project::truncate();

        // Projet 1 - MK-Lego
        Project::create([
            'title' => 'MK-Lego : A Lego assembler',
            'slug' => 'mk-lego',
            'description' => 'A Prusa MK3 repurposed to assemble Lego models automatically.',
            'content' => '',
            'category' => 'Prototyping, Embedded Systems',
            'technologies' => ['Arduino', 'C++', 'Fusion 360'],
            'image' => 'MK3.png',
            'github_url' => 'https://github.com/epfl-cs358/2025fa-mklego',
            'project_date' => '2025-12-19',
        ]);
    }
}