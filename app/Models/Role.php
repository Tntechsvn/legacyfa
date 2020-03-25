<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	protected $fillable = [
		'name', 'desciption', 'level'
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
	public function listRole($user)
	{
		//return static::where('level', '>', $user->levelUser)->get();
		return static::all();
	}
	
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

    public function editRole($id, $param)
    {
        return static::where('id', $id)->update($param);
    }
	/*END QUERY*/
}
