<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientAcknowledgement extends Model
{
	protected $fillable = ['pfr_id', 'data'];

	protected $casts = [
		'data' => 'array'
	];

	public function pfr()
	{
		return $this->belongsTo('App\Models\Pfr');
	}

	/*QUERY*/
	public function addNewClientAcknowledgement($param)
	{
		return static::firstOrCreate($param);
	}

	public function editClientAcknowledgement($idPfr, $param)
	{
		return static::where('pfr_id', $idPfr)->update($param);
	}

	public function infoClientAcknowledgementForPfr($idPfr)
	{
		return static::where('pfr_id', $idPfr)->first();
	}
	/*END QUERY*/
}
