<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DisciplinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('disciplines')->insert([
            'name' => 'Literatura'
        ]);

        DB::table('disciplines')->insert([
            'name' => 'Língua Portuguesa'
        ]);

        DB::table('disciplines')->insert([
            'name' => 'Gramática'
        ]);

        DB::table('disciplines')->insert([
            'name' => 'Matemática'
        ]);

        DB::table('disciplines')->insert([
            'name' => 'Geografia'
        ]);

        DB::table('disciplines')->insert([
            'name' => 'Química'
        ]);

        DB::table('disciplines')->insert([
            'name' => 'Espanhol'
        ]);

        DB::table('disciplines')->insert([
            'name' => 'Filosofia'
        ]);        
    }
}
