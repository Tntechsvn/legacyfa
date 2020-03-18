<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Rider extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;

    protected $fillable = [
        'name', 'slug', 'feature'
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
        return $this->belongsToMany('App\Models\Plan');
    }

    public function benifits()
    {
        return $this->hasMany('App\Models\Benifit');
    }

    public function risks()
    {
        return $this->hasMany('App\Models\Risk');
    }
}
