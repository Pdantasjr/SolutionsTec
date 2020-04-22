<?php

use Illuminate\Database\Seeder;

class PortfolioFactory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\portfolio::class, 4)->create();
    }
}
