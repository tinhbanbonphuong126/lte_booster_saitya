<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Price
 * @package App\Models\Admin
 * @version May 11, 2018, 12:14 am UTC
 *
 * @property integer bunjouchi_id
 * @property decimal bangou
 * @property string description
 */
class Price extends Model
{
    use SoftDeletes;

    public $table = 'prices';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $primaryKey = 'id';

    public $fillable = [
        'bunjouchi_id',
        'bangou',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'bunjouchi_id' => 'integer',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
