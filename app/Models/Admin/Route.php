<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Route
 * @package App\Models\Admin
 * @version May 9, 2018, 3:45 pm UTC
 *
 * @property string route
 */
class Route extends Model
{
    use SoftDeletes;

    public $table = 'routes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $primaryKey = 'id';


    public $fillable = [
        'route'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'route' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];



    /**
     * Relationship
     */

    public function station() {
        return $this->hasMany(Station::class, 'route_id', 'id');
    }
}
