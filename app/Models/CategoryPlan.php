<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryPlan extends Model
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
    public function listCategoryPlan()
    {
        return static::all();
    }

    public function listCategoryPlanPaginate($request, $paginate)
    {
        return static::paginate($paginate);   
    }

    public function listCategoryPlanTrashPaginate($request, $paginate)
    {
        return static::onlyTrashed()->paginate($paginate);
    }

    public function infoCategoryPlanById($id)
    {
        return static::findOrFail($id);
    }

    public function addNewCategoryPlan($param)
    {
        return static::firstOrCreate($param);
    }

    public function editCategoryPlan($id, $param)
    {
        return static::where('id', $id)->update($param);
    }

    public function softDeleteCategoryPlan($id)
    {
        return static::where('id', $id)->update([
            'deleted_at' => now()
        ]);
    }

    public function restoreCategoryPlan($id)
    {
        return static::onlyTrashed()->where('id', $id)->restore();
    }

    public function checkUniqueCategoryPlan($id, $name)
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
