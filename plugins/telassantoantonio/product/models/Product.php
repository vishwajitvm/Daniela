<?php namespace TelasSantoAntonio\Product\Models;

use Model;

/**
 * Model
 */
class Product extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'telassantoantonio_product_products';


    protected $jsonable = [
        'custom_detail',
        'custom_fields',
        'custom_gallery'
    ];
    
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [

        'photo' => 'System\Models\File'
 
    ];

    public function reorderExtendQuery($query)
    {
        $query->withTrashed();
    }

}
