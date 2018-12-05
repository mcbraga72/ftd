<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            'name' => 'Clenir Bellezi de Oliveira'
        ]);

        DB::table('authors')->insert([
            'name' => 'Maria Inês Campos'
        ]);

        DB::table('authors')->insert([
            'name' => 'Regina Braz Rocha'
        ]);

        DB::table('authors')->insert([
            'name' => 'Mauro Ferreira'
        ]);

        DB::table('authors')->insert([
            'name' => 'José Ruy Giovanni'
        ]);

        DB::table('authors')->insert([
            'name' => 'José Ruy Giovanni Jr.'
        ]);

        DB::table('authors')->insert([
            'name' => 'José Roberto Bonjorno'
        ]);

        DB::table('authors')->insert([
            'name' => 'Paulo Roberto Câmara de Sousa'
        ]);

        DB::table('authors')->insert([
            'name' => 'Edilson Adão'
        ]);

        DB::table('authors')->insert([
            'name' => 'Laercio Furquim Jr.'
        ]);        
    }
}
