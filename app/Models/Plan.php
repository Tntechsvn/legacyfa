<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Plan extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;

    protected $fillable = [
        'name', 'slug', 'company_id', 'category_plan_id', 'feature'
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

    public function infoPlanById($id)
    {
        return static::findOrFail($id);
    }

    public function addNewPlan($param)
    {
        return static::firstOrCreate($param);
    }

    /*public function editPlan($slug, $param)
    {
        return static::where('slug', $slug)->update($param);
    }*/
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
