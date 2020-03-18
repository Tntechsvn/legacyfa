<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Permission extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;

    protected $fillable = ['name', 'slug', 'description'];

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
    
    public function roles()
    {
        return $this->belongsToMany('App\Models\Role');
    }

    /*QUERY DATABASE*/
    public function listPermission()
    {
        return static::all();
    }
    /*END QUERY DATABASE*/
}
