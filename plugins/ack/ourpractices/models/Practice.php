<?php namespace Ack\OurPractices\Models;

use Model;

/**
 * Model
 */
class Practice extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ack_ourpractices_practices';

     /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['title', 'link'];

    /**
     * @var array Relations
     */
    public $belongsToMany = [
        'categories' => ['Ack\OurPractices\Models\Category','table' => 'ack_ourpractices_practs_cats', 'order' => 'title'],
    ];
    public $attachOne = [
        'image' => ['System\Models\File'],
    ];

    /**
     * @var array Validation rules
     */
    public $rules = [
        'title'                  => 'required',
        'link'                 => 'required',
        'categories'                 => 'required',
        'image'    => 'required'
    ];

    public $customMessages = [
        'required' => 'Поле :attribute обязательно для заполнения.'
    ];
}
