<?php

namespace App\Repositories\Admin;

use App\Models\Admin\School;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SchoolRepository
 * @package App\Repositories\Admin
 * @version May 9, 2018, 7:11 pm UTC
 *
 * @method School findWithoutFail($id, $columns = ['*'])
 * @method School find($id, $columns = ['*'])
 * @method School first($columns = ['*'])
*/
class SchoolRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'region_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return School::class;
    }
}
