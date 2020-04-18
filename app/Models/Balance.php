<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
	protected $fillable = ['pfr_id', 'assets', 'liabilities', 'reason'];

	public function pfr()
	{
		return $this->belongsTo('App\Models\Pfr');
	}

	/*QUERY*/
	public function addNewBalance($param)
	{
		return static::firstOrCreate($param);
	}

	public function editBalance($idPfr, $param)
	{
		return static::where('pfr_id', $idPfr)->update($param);
	}

	public function infoBalanceForPfr($idPfr)
	{
		return static::where('pfr_id', $idPfr)->first();
	}
	/*END QUERY*/
}
