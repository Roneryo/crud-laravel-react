<?php

use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\ProjectFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProjectSeeder::class);
    }
}
