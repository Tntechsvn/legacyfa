<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plan extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;
    use SoftDeletes;

    protected $fillable = [
        'name', 'slug', 'company_id', 'category_plan_id', 'featured'
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

    public function riders()
    {
        return $this->belongsToMany('App\Models\Rider');
    }

    public function categoryPlan()
    {
        return $this->belongsTo('App\Models\CategoryPlan');
    }

    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }

    /*QUERY*/
    public function listPlan()
    {
        return static::all();
    }

    public function listPlanPaginate($request, $paginate)
    {
        return static::paginate($paginate);   
    }

    public function listPlanTrashPaginate($request, $paginate)
    {
        return static::onlyTrashed()->paginate($paginate);
    }

    public function infoPlanById($id)
    {
        return static::findOrFail($id);
    }

    public function addNewPlan($param)
    {
        return static::firstOrCreate($param);
    }

    public function editPlan($id, $param)
    {
        return static::where('id', $id)->update($param);
    }

    public function softDeletePlan($id)
    {
        return static::where('id', $id)->update([
            'deleted_at' => now()
        ]);
    }

    public function restorePlan($id)
    {
        return static::onlyTrashed()->where('id', $id)->restore();
    }

    public function checkUniquePlan($id, $name)
    {
        return static::where('id', '<>', $id)->where('name', $name)->count();
    }
    /*END QUERY*/

    /*ATTRIBUTE*/
    public function getNameCategoryPlanAttribute()
    {
        return optional($this->categoryPlan)->name;
    }

    public function getNameCompanyAttribute()
    {
        return optional($this->company)->name;
    }
    /*END ATTRIBUTE*/
}
