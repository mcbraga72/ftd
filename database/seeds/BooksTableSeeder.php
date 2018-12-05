<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'isbn' => '7898592131010',
            'title' => '360° Literatura',
            'cover' => 'https://s3-us-west-2.amazonaws.com/catalogo.ftd.com.br/files/uploads/11603117CJ_resized_596x800.jpg',
            'level' => 'Ensino médio',
            'price' => '239.00'
        ]);

        DB::table('books')->insert([
            'isbn' => '7898592131058',
            'title' => '360° Produção de Texto',
            'cover' => 'https://s3-us-west-2.amazonaws.com/catalogo.ftd.com.br/files/uploads/11603118CJ_resized_596x800.jpg',
            'level' => 'Ensino médio',
            'price' => '219.00'
        ]);

        DB::table('books')->insert([
            'isbn' => '7898592130853',
            'title' => '360° Gramática',
            'cover' => 'https://s3-us-west-2.amazonaws.com/catalogo.ftd.com.br/files/uploads/11604000CJ_resized_596x800.jpg',
            'level' => 'Ensino médio',
            'price' => '249.00'
        ]);

        DB::table('books')->insert([
            'isbn' => '7898592131034',
            'title' => '360° Matemática',
            'cover' => 'https://s3-us-west-2.amazonaws.com/catalogo.ftd.com.br/files/uploads/11615647CJ_resized_596x800.jpg',
            'level' => 'Ensino médio',
            'price' => '249.00'
        ]);

        DB::table('books')->insert([
            'isbn' => '7898592130990',
            'title' => '360° Geografia',
            'cover' => 'https://s3-us-west-2.amazonaws.com/catalogo.ftd.com.br/files/uploads/11655078CJ_resized_596x800.jpg',
            'level' => 'Ensino médio',
            'price' => '249.00'
        ]);
    }
}
