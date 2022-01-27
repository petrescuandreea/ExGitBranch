<?php

use Illuminate\Database\Seeder;
use App\Leader;

class LeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Leader::class, 10) -> create();
    }
}
