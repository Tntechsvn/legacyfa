<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
	protected $fillable = ['pfr_id', 'declaration', 'review', 'callback'];

	protected $casts = [
		'review' => 'array',
		'callback' => 'array'
	];

	public function pfr()
	{
		return $this->belongsTo('App\Models\Pfr');
	}

	/*QUERY*/
	public function addNewSurvey($param)
	{
		return static::firstOrCreate($param);
	}

	public function editSurvey($idPfr, $param)
	{
		return static::where('pfr_id', $idPfr)->update($param);
	}

	public function infoSurveyForPfr($idPfr)
	{
		return static::where('pfr_id', $idPfr)->first();
	}
	/*END QUERY*/
}
