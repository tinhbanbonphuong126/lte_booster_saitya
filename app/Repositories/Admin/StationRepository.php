<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Station;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class StationRepository
 * @package App\Repositories\Admin
 * @version May 9, 2018, 7:32 pm UTC
 *
 * @method Station findWithoutFail($id, $columns = ['*'])
 * @method Station find($id, $columns = ['*'])
 * @method Station first($columns = ['*'])
*/
class StationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'route_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Station::class;
    }
}
