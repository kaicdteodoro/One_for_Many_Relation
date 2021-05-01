<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [
                'name' => 'Camiteta Polo',
                'price' => 100,
                'stock' => 4,
                'department_id' => 1
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Calça Jeans',
                'price' => 120,
                'stock' => 1,
                'department_id' => 1
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Camisa Manga Longa',
                'price' => 34,
                'stock' => 2,
                'department_id' => 1
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'PC Gamer',
                'price' => 3500,
                'stock' => 4,
                'department_id' => 5
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Impressora',
                'price' => 250,
                'stock' => 7,
                'department_id' => 5
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Mouse',
                'price' => 80,
                'stock' => 10,
                'department_id' => 2
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Cama da casal',
                'price' => 900,
                'stock' => 5,
                'department_id' => 4
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Perfume',
                'price' => 120,
                'stock' => 500,
                'department_id' => 3
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Guarda Roupas',
                'price' => 750,
                'stock' => 6,
                'department_id' => 4
            ]
        );
    }
}
