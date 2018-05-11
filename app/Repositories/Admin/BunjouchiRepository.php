<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Bunjouchi;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BunjouchiRepository
 * @package App\Repositories\Admin
 * @version May 11, 2018, 2:43 am UTC
 *
 * @method Bunjouchi findWithoutFail($id, $columns = ['*'])
 * @method Bunjouchi find($id, $columns = ['*'])
 * @method Bunjouchi first($columns = ['*'])
*/
class BunjouchiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'map_url',
        'document_url',
        'address',
        'land_area',
        'ground',
        'total_parcel',
        'construction_pay_rate',
        'floor_area_ratio',
        'usage_area',
        'drainage',
        'dealing_status',
        'school_id',
        'station_id',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Bunjouchi::class;
    }
}
