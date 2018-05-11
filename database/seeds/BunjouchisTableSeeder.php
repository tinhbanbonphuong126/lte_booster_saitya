<?php

use Illuminate\Database\Seeder;

class BunjouchisTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('bunjouchis')->delete();
        
        \DB::table('bunjouchis')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => NULL,
                'map_url' => NULL,
                'document_url' => NULL,
                'address' => NULL,
                'land_area' => NULL,
                'ground' => NULL,
                'total_parcel' => NULL,
                'construction_pay_rate' => NULL,
                'floor_area_ratio' => NULL,
                'usage_area' => NULL,
                'drainage' => NULL,
                'dealing_status' => NULL,
                'school_id' => 1,
                'station_id' => 0,
                'status' => NULL,
                'created_at' => '2018-05-11 06:56:27',
                'updated_at' => '2018-05-11 06:56:39',
                'deleted_at' => '2018-05-11 06:56:39',
            ),
        ));
        
        
    }
}