<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	protected $fillable = [
		'name', 'desciption'
	];

	public function users()
	{
		return $this->hasMany('App\Models\User');
	}

	public function permissions()
	{
		return $this->belongsToMany('App\Models\Permission');
	}

	/*QUERY*/
	public function listRolePaginate($request)
	{
		return static::paginate(config('constants.PAGINATE_ADMIN'));
	}

	public function infoRoleById($id)
    {
        return static::findOrFail($id);
    }

    public function addNewRole($param)
    {
        return static::firstOrCreate($param);
    }

    /*public function editRole($slug, $param)
    {
        return static::where('slug', $slug)->update($param);
    }*/
	/*END QUERY*/
}
