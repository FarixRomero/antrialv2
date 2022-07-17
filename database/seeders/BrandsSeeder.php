<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('brands')->insert([
            'name' => "Sapolio"
            
        ]);
        DB::table('brands')->insert([
            'name' => "Eterna"
        ]);
        DB::table('brands')->insert([
            'name' => "Limpia Ya"
        ]);
        DB::table('brands')->insert([
            'name' => "Lesly"
        ]);
        DB::table('brands')->insert([
            'name' => "Dfraga"
        ]);
    }
}
