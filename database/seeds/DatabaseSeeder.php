<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//         $this->call(UsersTableSeeder::class);

        factory(User::class, 1)->create();
        $this->call(RegionsTableSeeder::class);
        $this->call(SchoolsTableSeeder::class);
        $this->call(RoutesTableSeeder::class);
        $this->call(StationsTableSeeder::class);
    }
}
