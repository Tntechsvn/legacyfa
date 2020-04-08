<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;
    use SoftDeletes;

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

    public function listCompanyTrashPaginate($request, $paginate)
    {
        return static::onlyTrashed()->paginate($paginate);
    }

    public function infoCompanyById($id)
    {
        return static::findOrFail($id);
    }

    public function addNewCompany($param)
    {
        return static::firstOrCreate($param);
    }

    public function editCompany($id, $param)
    {
        return static::where('id', $id)->update($param);
    }

    public function softDeleteCompany($id)
    {
        return static::where('id', $id)->update([
            'deleted_at' => now()
        ]);
    }

    public function restoreCompany($id)
    {
        return static::onlyTrashed()->where('id', $id)->restore();
    }

    public function checkUniqueCompany($id, $name)
    {
        return static::where('id', '<>', $id)->where('name', $name)->count();
    }
    /*END QUERY*/

    public function scopeKeyword($query, $keyword)
    {
        return $query
                ->where('name', 'LIKE', '%'.$keyword.'%');
    }
}
