<?php namespace Ack\OurPractices\Models;

use Model;

/**
 * Model
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ack_ourpractices_categories';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['title', 'slug'];

    /**
     * @var array Relations
     */

    public $belongsToMany = [
        'practices' => ['Ack\OurPractices\Models\Practice', 'table' => 'ack_ourpractices_practs_cats']
    ];

    /**
     * @var array Validation rules
     */
    public $rules = [
        'title'                  => 'required',
        'slug'                 => 'required'
    ];
    public $customMessages = [
        'required' => 'Поле :attribute обязательно для заполнения.'
    ];
}
