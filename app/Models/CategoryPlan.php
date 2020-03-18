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

    /*QUERY*/
    public function listCategoryPlan()
    {
        return static::all();
    }

    public function listCategoryPlanPaginate($request, $paginate)
    {
        return static::paginate($paginate);   
    }

    public function infoCategoryPlanById($id)
    {
        return static::findOrFail($id);
    }

    public function addNewCategoryPlan($param)
    {
        return static::firstOrCreate($param);
    }

    /*public function editCategoryPlan($slug, $param)
    {
        return static::where('slug', $slug)->update($param);
    }*/
    /*END QUERY*/
}
