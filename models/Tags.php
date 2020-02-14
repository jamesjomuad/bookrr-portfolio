<?php namespace Bookrr\Portfolio\Models;

use Model;

/**
 * Tags Model
 */
class Tags extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'bookrr_portfolio_tags';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    public function filterFields($fields, $context = null)
    {
        $fields->slug->value = str_slug($fields->name->value);
    }

}
