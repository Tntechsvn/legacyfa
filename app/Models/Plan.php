<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Plan extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;

    protected $fillable = [
        'name', 'slug', 'company_id', 'category_plan_id', 'feature'
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function riders()
    {
        $this->belongsToMany('App\Models\Rider');
    }
}
