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

    protected $dates = ['deleted_at'];

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

    /*QUERY*/
    public function listRider()
    {
        return static::all();
    }

    public function listRiderPaginate($request, $paginate)
    {
        return static::paginate($paginate);   
    }

    public function infoRiderById($id)
    {
        return static::findOrFail($id);
    }

    public function addNewRider($param)
    {
        return static::firstOrCreate($param);
    }

    /*public function editRider($slug, $param)
    {
        return static::where('slug', $slug)->update($param);
    }*/
    /*END QUERY*/
}
