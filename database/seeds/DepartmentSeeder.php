<?php

use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert(['name' => 'Roupas']);
        DB::table('departments')->insert(['name' => 'Eletrônicos']);
        DB::table('departments')->insert(['name' => 'Perfumes']);
        DB::table('departments')->insert(['name' => 'Móveis']);
        DB::table('departments')->insert(['name' => 'Informática']);
    }
}
