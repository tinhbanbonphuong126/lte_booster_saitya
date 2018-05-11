<?php

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'migration' => '2014_10_12_000000_create_users_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'migration' => '2014_10_12_100000_create_password_resets_table',
                'batch' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'migration' => '2018_05_08_195309_create_bunjouchis_table',
                'batch' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'migration' => '2018_05_08_195422_create_prices_table',
                'batch' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'migration' => '2018_05_08_195505_create_stations_table',
                'batch' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'migration' => '2018_05_08_195535_create_schools_table',
                'batch' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'migration' => '2018_05_08_195618_create_routes_table',
                'batch' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'migration' => '2018_05_08_195646_create_regions_table',
                'batch' => 1,
            ),
            8 => 
            array (
                'id' => 17,
                'migration' => '2018_05_09_182734_create_bunjouchis_table',
                'batch' => 2,
            ),
            9 => 
            array (
                'id' => 18,
                'migration' => '2018_05_09_182734_create_password_resets_table',
                'batch' => 2,
            ),
            10 => 
            array (
                'id' => 19,
                'migration' => '2018_05_09_182734_create_prices_table',
                'batch' => 2,
            ),
            11 => 
            array (
                'id' => 20,
                'migration' => '2018_05_09_182734_create_regions_table',
                'batch' => 2,
            ),
            12 => 
            array (
                'id' => 21,
                'migration' => '2018_05_09_182734_create_routes_table',
                'batch' => 2,
            ),
            13 => 
            array (
                'id' => 22,
                'migration' => '2018_05_09_182734_create_schools_table',
                'batch' => 2,
            ),
            14 => 
            array (
                'id' => 23,
                'migration' => '2018_05_09_182734_create_stations_table',
                'batch' => 2,
            ),
            15 => 
            array (
                'id' => 24,
                'migration' => '2018_05_09_182734_create_users_table',
                'batch' => 2,
            ),
            16 => 
            array (
                'id' => 25,
                'migration' => '2018_05_09_190908_create_bunjouchis_table',
                'batch' => 0,
            ),
            17 => 
            array (
                'id' => 26,
                'migration' => '2018_05_09_190908_create_password_resets_table',
                'batch' => 0,
            ),
            18 => 
            array (
                'id' => 27,
                'migration' => '2018_05_09_190908_create_prices_table',
                'batch' => 0,
            ),
            19 => 
            array (
                'id' => 28,
                'migration' => '2018_05_09_190908_create_regions_table',
                'batch' => 0,
            ),
            20 => 
            array (
                'id' => 29,
                'migration' => '2018_05_09_190908_create_routes_table',
                'batch' => 0,
            ),
            21 => 
            array (
                'id' => 30,
                'migration' => '2018_05_09_190908_create_schools_table',
                'batch' => 0,
            ),
            22 => 
            array (
                'id' => 31,
                'migration' => '2018_05_09_190908_create_stations_table',
                'batch' => 0,
            ),
            23 => 
            array (
                'id' => 32,
                'migration' => '2018_05_09_190908_create_users_table',
                'batch' => 0,
            ),
            24 => 
            array (
                'id' => 33,
                'migration' => '2018_05_09_190910_add_foreign_keys_to_schools_table',
                'batch' => 0,
            ),
            25 => 
            array (
                'id' => 34,
                'migration' => '2018_05_09_190910_add_foreign_keys_to_stations_table',
                'batch' => 0,
            ),
            26 => 
            array (
                'id' => 35,
                'migration' => '2018_05_09_191538_create_bunjouchis_table',
                'batch' => 0,
            ),
            27 => 
            array (
                'id' => 36,
                'migration' => '2018_05_09_191538_create_password_resets_table',
                'batch' => 0,
            ),
            28 => 
            array (
                'id' => 37,
                'migration' => '2018_05_09_191538_create_prices_table',
                'batch' => 0,
            ),
            29 => 
            array (
                'id' => 38,
                'migration' => '2018_05_09_191538_create_regions_table',
                'batch' => 0,
            ),
            30 => 
            array (
                'id' => 39,
                'migration' => '2018_05_09_191538_create_routes_table',
                'batch' => 0,
            ),
            31 => 
            array (
                'id' => 40,
                'migration' => '2018_05_09_191538_create_schools_table',
                'batch' => 0,
            ),
            32 => 
            array (
                'id' => 41,
                'migration' => '2018_05_09_191538_create_stations_table',
                'batch' => 0,
            ),
            33 => 
            array (
                'id' => 42,
                'migration' => '2018_05_09_191538_create_users_table',
                'batch' => 0,
            ),
            34 => 
            array (
                'id' => 51,
                'migration' => '2018_05_09_191639_create_bunjouchis_table',
                'batch' => 3,
            ),
            35 => 
            array (
                'id' => 52,
                'migration' => '2018_05_09_191639_create_password_resets_table',
                'batch' => 3,
            ),
            36 => 
            array (
                'id' => 53,
                'migration' => '2018_05_09_191639_create_prices_table',
                'batch' => 3,
            ),
            37 => 
            array (
                'id' => 54,
                'migration' => '2018_05_09_191639_create_regions_table',
                'batch' => 3,
            ),
            38 => 
            array (
                'id' => 55,
                'migration' => '2018_05_09_191639_create_routes_table',
                'batch' => 3,
            ),
            39 => 
            array (
                'id' => 56,
                'migration' => '2018_05_09_191639_create_schools_table',
                'batch' => 3,
            ),
            40 => 
            array (
                'id' => 57,
                'migration' => '2018_05_09_191639_create_stations_table',
                'batch' => 3,
            ),
            41 => 
            array (
                'id' => 58,
                'migration' => '2018_05_09_191639_create_users_table',
                'batch' => 3,
            ),
            42 => 
            array (
                'id' => 59,
                'migration' => '2018_05_11_000752_create_prices_table',
                'batch' => 0,
            ),
            43 => 
            array (
                'id' => 60,
                'migration' => '2018_05_11_001048_create_prices_table',
                'batch' => 0,
            ),
        ));
        
        
    }
}