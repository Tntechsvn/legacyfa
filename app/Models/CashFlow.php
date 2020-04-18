<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CashFlow extends Model
{
	protected $fillable = ['pfr_id', 'income', 'expenses', 'reason_cash_flow', 'reason_plan'];

	public function pfr()
	{
		return $this->belongsTo('App\Models\Pfr');
	}

	/*END QUERY*/
	public function addNewCashFlow($param)
	{
		return static::firstOrCreate($param);
	}

	public function editCashFlow($idPfr, $param)
	{
		return static::where('pfr_id', $idPfr)->update($param);
	}

	public function infoCashFlowForPfr($idPfr)
	{
		return static::where('pfr_id', $idPfr)->first();
	}
	/*QUERY*/
}
