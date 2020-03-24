<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\SoftDeletes;

class Risk extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;
    use SoftDeletes;

    protected $fillable = [
        'name', 'slug', 'detail', 'rider_id'
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

    public function rider()
    {
        return $this->belongsTo('App\Models\Rider');
    }

    /*QUERY*/
    public function listRisk()
    {
        return static::all();
    }

    public function listRiskPaginate($request, $paginate)
    {
        return static::paginate($paginate);   
    }

    public function infoRiskById($id)
    {
        return static::findOrFail($id);
    }

    public function addNewRisk($param)
    {
        return static::firstOrCreate($param);
    }

    /*public function editRisk($slug, $param)
    {
        return static::where('slug', $slug)->update($param);
    }*/
    /*END QUERY*/
}
