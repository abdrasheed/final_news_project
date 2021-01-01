<?php

use Illuminate\Database\Seeder;

class categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run() {
        $array = ['sport','internet','business','technology'];
        for($i = 0; $i<4 ;$i++){
            \Illuminate\Support\Facades\DB::table('categories')->insert([
                'category_name'=>$array[$i],
            ]);
        }
    }
}
