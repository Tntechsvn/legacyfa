<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
	protected $fillable = ['pfr_id', 'property', 'investment', 'saving', 'cpf', 'insurance', 'loan'];

	protected $casts = [
		'property' => 'array',
		'investment' => 'array',
		'saving' => 'array',
		'cpf' => 'array',
		'insurance' => 'array',
		'loan' => 'array'
	];

	public function pfr()
	{
		return $this->belongsTo('App\Models\Pfr');
	}

	public function addNewPortfolio($param)
	{
		return static::firstOrCreate($param);
	}

	public function editPortfolio($idPfr, $param)
	{
		return static::where('pfr_id', $idPfr)->update($param);
	}

	public function infoPortfolioForPfr($idPfr)
	{
		return static::where('pfr_id', $idPfr)->first();
	}
}
