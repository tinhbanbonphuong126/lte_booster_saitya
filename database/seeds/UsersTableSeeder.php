<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'email' => 'phamque.adnetplus@gmail.com',
                'password' => '$2y$10$lb8I37KHL5foZuVXwEKgs.NZjkWzxzrKsP8KK7z42m8skMNFyrzYG',
                'remember_token' => 'WEwJRBA5FI',
                'created_at' => '2018-05-09 19:17:10',
                'updated_at' => '2018-05-09 19:17:10',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}