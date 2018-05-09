<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Route;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RouteRepository
 * @package App\Repositories\Admin
 * @version May 9, 2018, 3:45 pm UTC
 *
 * @method Route findWithoutFail($id, $columns = ['*'])
 * @method Route find($id, $columns = ['*'])
 * @method Route first($columns = ['*'])
*/
class RouteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'route'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Route::class;
    }
}
