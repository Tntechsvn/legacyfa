<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cka extends Model
{
    protected $fillable = ['pfr_id', 'data', 'reason'];

	public function pfr()
	{
		return $this->belongsTo('App\Models\Pfr');
	}

    public function addNewCka($param)
	{
		return static::firstOrCreate($param);
	}

	public function editCka($idPfr, $param)
	{
		return static::where('pfr_id', $idPfr)->update($param);
	}

	public function infoCkaForPfr($idPfr)
	{
		return static::where('pfr_id', $idPfr)->first();
	}
}
