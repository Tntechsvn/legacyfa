<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrioritiesNeed extends Model
{
    protected $fillable = ['pfr_id', 'rate'];

	public function pfr()
	{
		return $this->belongsTo('App\Models\Pfr');
	}

    public function addNewPrioritiesNeed($param)
	{
		return static::firstOrCreate($param);
	}

	public function editPrioritiesNeed($idPfr, $param)
	{
		return static::where('pfr_id', $idPfr)->update($param);
	}

	public function infoPrioritiesNeedForPfr($idPfr)
	{
		return static::where('pfr_id', $idPfr)->first();
	}
}
