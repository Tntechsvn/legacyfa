<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RiskProfile extends Model
{
    protected $fillable = ['pfr_id', 'data'];

	public function pfr()
	{
		return $this->belongsTo('App\Models\Pfr');
	}

    public function addNewRiskProfile($param)
	{
		return static::firstOrCreate($param);
	}

	public function editRiskProfile($idPfr, $param)
	{
		return static::where('pfr_id', $idPfr)->update($param);
	}

	public function infoRiskProfileForPfr($idPfr)
	{
		return static::where('pfr_id', $idPfr)->first();
	}
}
