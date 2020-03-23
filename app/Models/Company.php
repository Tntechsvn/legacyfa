<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Company extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;

    protected $fillable = [
        'name', 'slug'
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
        return $this->hasMany('App\Models\Plan');
    }

    /*QUERY*/
    public function listCompany()
    {
        return static::all();
    }

    public function listCompanyPaginate($request, $paginate)
    {
        return static::paginate($paginate);   
    }

    public function infoCompanyById($id)
    {
        return static::findOrFail($id);
    }

    public function addNewCompany($param)
    {
        return static::firstOrCreate($param);
    }

    /*public function editCompany($slug, $param)
    {
        return static::where('slug', $slug)->update($param);
    }*/
    /*END QUERY*/
}
