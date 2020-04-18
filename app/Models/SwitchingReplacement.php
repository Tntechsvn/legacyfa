<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SwitchingReplacement extends Model
{
	protected $fillable = ['pfr_id', 'data', 'note'];

	protected $casts = [
		'data' => 'array'
	];

	public function pfr()
	{
		return $this->belongsTo('App\Models\Pfr');
	}

	/*QUERY*/
	public function addNewSwitchingReplacement($param)
	{
		return static::firstOrCreate($param);
	}

	public function editSwitchingReplacement($idPfr, $param)
	{
		return static::where('pfr_id', $idPfr)->update($param);
	}

	public function infoSwitchingReplacementForPfr($idPfr)
	{
		return static::where('pfr_id', $idPfr)->first();
	}
	/*END QUERY*/
}
