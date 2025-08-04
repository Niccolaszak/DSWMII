<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjetoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projetos')->insert([
        [
            'equipes_id' => 1,
            'email' => "nicolasmiuczak@gmail.com",
            'cargo' => "Capitão America",
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'nome'=> "Vinicius",
            'equipes_id' => 1,
            'email' => "vinicius@gmail.com",
            'cargo' => "Thor",
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'nome'=> "Aline",
            'equipes_id' => 1,
            'email' => "aline@gmail.com",
            'cargo' => "Stark",
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'nome'=> "Alisson",
            'equipes_id' => 2,
            'email' => "alisson@gmail.com",
            'cargo' => "Loki",
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);
    }
}
