<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Bunjouchi
 * @package App\Models\Admin
 * @version May 11, 2018, 2:43 am UTC
 *
 * @property string title
 * @property string map_url
 * @property string document_url
 * @property string address
 * @property string land_area
 * @property string ground
 * @property string total_parcel
 * @property string construction_pay_rate
 * @property string floor_area_ratio
 * @property string usage_area
 * @property string drainage
 * @property string dealing_status
 * @property integer school_id
 * @property integer station_id
 * @property decimal status
 */
class Bunjouchi extends Model
{
    use SoftDeletes;

    public $table = 'bunjouchis';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $primaryKey = 'id';

    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'map_url' => 'string',
        'document_url' => 'string',
        'address' => 'string',
        'land_area' => 'string',
        'ground' => 'string',
        'total_parcel' => 'string',
        'construction_pay_rate' => 'string',
        'floor_area_ratio' => 'string',
        'usage_area' => 'string',
        'drainage' => 'string',
        'dealing_status' => 'string',
        'school_id' => 'integer',
        'station_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];


    /**
     * Relationship here
     */

    public function school() {
        return $this->belongsTo(School::class, 'school_id', 'id');
    }

    public function station() {
        return $this->belongsTo(Station::class, 'station_id', 'id');
    }

    public function prices() {
        return $this->hasMany(Price::class, "bunjouchi_id", "id");
    }
    
}
