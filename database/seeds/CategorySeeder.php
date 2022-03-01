<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Baju',
        ]);

        DB::table('categories')->insert([
            'name' => 'Hoodie',
        ]);

        DB::table('categories')->insert([
            'name' => 'Flanel',
        ]);

        DB::table('categories')->insert([
            'name' => 'Kemeja',
        ]);

        DB::table('categories')->insert([
            'name' => 'Celana',
        ]);
    }
}