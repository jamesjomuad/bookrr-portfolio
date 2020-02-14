<?php namespace Bookrr\Portfolio\Models;

use Model;

/**
 * Project Model
 */
class Project extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;

    public $table = 'bookrr_portfolio_projects';

    protected $guarded = ['*'];

    protected $fillable = [];

    protected $rules = [];

    protected $hidden = ['created_at','updated_at','deleted_at'];

    public $attachMany = [
        'images' => 'System\Models\File'
    ];

    public $belongsToMany = [
        'tags' => [
            'Bookrr\Portfolio\Models\Tags',
            'table' => 'bookrr_portfolio_tags_pivot',
            'key'   => 'project_id',
            'otherKey' => 'tag_id', 
        ]
    ];

    public function getThumb($value)
    {
        return $this->images->first();
    }

}
