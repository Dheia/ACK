<?php namespace Ack\Nsi\Models;

use Model;

/**
 * Model
 */
class Item extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ack_nsi_items';

    public $attachOne = [
        'report' => 'System\Models\File',
    ];

    public $attachMany = [
        'photos_before' => ['System\Models\File', 'order' => 'sort_order'],
        'photos_after' => ['System\Models\File', 'order' => 'sort_order'],
    ];

    /**
     * @var array Validation rules
     */
    public $rules = [
        'title'                  => 'required'
    ];
}
