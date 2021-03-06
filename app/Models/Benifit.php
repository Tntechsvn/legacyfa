<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Benifit extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;

    protected $fillable = [
        'name', 'slug', 'detail', 'rider_id'
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

    public function rider()
    {
    	return $this->belongsTo('App\Models\Rider');
    }

    /*QUERY*/
    public function listBenifit()
    {
        return static::all();
    }

    public function listBenifitPaginate($request, $paginate)
    {
        return static::paginate($paginate);   
    }

    public function infoBenifitById($id)
    {
        return static::findOrFail($id);
    }

    public function addNewBenifit($param)
    {
        return static::firstOrCreate($param);
    }

    /*public function editBenifit($slug, $param)
    {
        return static::where('slug', $slug)->update($param);
    }*/
    /*END QUERY*/
}
