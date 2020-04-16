<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Affordability extends Model
{
    protected $fillable = ['pfr_id', 'payor_detail', 'budget', 'reason'];

	public function pfr()
	{
		return $this->belongsTo('App\Models\Pfr');
	}

    public function addNewAffordability($param)
	{
		return static::firstOrCreate($param);
	}

	public function editAffordability($idPfr, $param)
	{
		return static::where('pfr_id', $idPfr)->update($param);
	}

	public function infoAffordabilityForPfr($idPfr)
	{
		return static::where('pfr_id', $idPfr)->first();
	}
}
