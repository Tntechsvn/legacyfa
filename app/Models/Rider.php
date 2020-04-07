<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rider extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;
    use SoftDeletes;

    protected $fillable = [
        'name', 'slug', 'featured'
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

    public function listRiderTrashPaginate($request, $paginate)
    {
        return static::onlyTrashed()->paginate($paginate);
    }

    public function infoRiderById($id)
    {
        return static::findOrFail($id);
    }

    public function addNewRider($param)
    {
        return static::firstOrCreate($param);
    }

    public function editRider($id, $param)
    {
        return static::where('id', $id)->update($param);
    }

    public function softDeleteRider($id)
    {
        return static::where('id', $id)->update([
            'deleted_at' => now()
        ]);
    }

    public function restoreRider($id)
    {
        return static::onlyTrashed()->where('id', $id)->restore();
    }

    public function checkUniqueRider($id, $name)
    {
        return static::where('id', '<>', $id)->where('name', $name)->count();
    }
    /*END QUERY*/

    /*ATTRIBUTE*/
    public function getPlanRiderAttribute()
    {
        return $this->plans()->pluck('id');
    }
    /*END ATTRIBUTE*/

    public function scopeKeyword($query, $keyword)
    {
        return $query
                ->where('name', 'LIKE', '%'.$keyword.'%');
    }
}
