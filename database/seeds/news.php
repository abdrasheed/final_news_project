<?php

use Illuminate\Database\Seeder;

class news extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\news::class ,150)->create();
    }
}
