<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $curso = new Curso();

        $curso->name = 'laravel';
        $curso->descripcion = 'El mejor framework de PHP';
        $curso->categoria = 'Desarollo Web';

        $curso->save();

        $curso2 = new Curso();

        $curso2->name = 'laravel';
        $curso2->descripcion = 'El mejor framework de PHP';
        $curso2->categoria = 'Desarollo Web';

        $curso2->save();

        $curso3 = new Curso();

        $curso3->name = 'laravel';
        $curso3->descripcion = 'El mejor framework de PHP';
        $curso3->categoria = 'Desarollo Web';

        $curso3->save();
    }
}
