<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\User\AddRolesForStartingSeeder;
use Database\Seeders\User\AddUsersIncludeTheirRolesForStartingSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call([
            AddRolesForStartingSeeder::class,
            AddUsersIncludeTheirRolesForStartingSeeder::class,
        ]);
    }
}
