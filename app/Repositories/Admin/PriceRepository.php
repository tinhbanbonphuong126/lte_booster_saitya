<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Price;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PriceRepository
 * @package App\Repositories\Admin
 * @version May 11, 2018, 12:14 am UTC
 *
 * @method Price findWithoutFail($id, $columns = ['*'])
 * @method Price find($id, $columns = ['*'])
 * @method Price first($columns = ['*'])
*/
class PriceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'bunjouchi_id',
        'bangou',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Price::class;
    }
}
