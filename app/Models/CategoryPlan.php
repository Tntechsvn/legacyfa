<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class CategoryPlan extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;

    protected $fillable = [
        'name', 'slug'
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

    public function plans()
    {
        return $this->hasMany('App\Models\Plan');
    }
}
