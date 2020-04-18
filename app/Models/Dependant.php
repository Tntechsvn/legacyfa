<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Carbon\Carbon;

class Dependant extends Model
{
    use SoftDeletes;

	protected $fillable = ['pfr_id', 'title', 'name', 'relationship', 'dob', 'age', 'gender', 'year_to_support'];

	public function pfr()
	{
		return $this->belongsTo('App\Models\Pfr');
	}

	/*QUERY*/
	public function listDependant()
	{
		return static::all();
	}

	public function listDependantForPfrPaginate($request, $idPfr, $paginate)
	{
		return static::where('pfr_id', $idPfr)->paginate($paginate);   
	}

	public function listDependantTrashForPfrPaginate($request, $idPfr, $paginate)
	{
		return static::where('pfr_id', $idPfr)->onlyTrashed()->paginate($paginate);
	}

	public function infoDependantById($id)
	{
		return static::findOrFail($id);
	}

	public function addNewDependant($param)
	{
		return static::firstOrCreate($param);
	}

	public function editDependant($id, $param)
	{
		return static::where('id', $id)->update($param);
	}

	public function softDeleteDependant($id)
	{
		return static::where('id', $id)->update([
			'deleted_at' => now()
		]);
	}

	public function restoreDependant($id)
	{
		return static::onlyTrashed()->where('id', $id)->restore();
	}
	/*END QUERY*/

	/*ATTRIBUTE*/
	public function getGenderDependantAttribute()
	{
		if ($this->gender == 0) {
			return "Male";
		} else{
			return "Female";
		}
	}
	public function getBirthdayAttribute()
	{
		return Carbon::parse($this->dob)->format('d-m-Y');
	}
	/*END ATTRIBUTE*/
}
