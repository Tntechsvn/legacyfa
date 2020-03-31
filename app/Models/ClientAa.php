<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientAa extends Model
{
    protected $fillable = ['client_id', 'age', 'english_spoken', 'english_written', 'education_level'];

    public function client()
    {
    	return $this->belongsTo('App\Models\Client');
    }

    public function infoClientAaById($id)
	{
		return static::findOrFail($id);
	}

	public function addNewClientAa($param)
	{
		return static::firstOrCreate($param);
	}

	public function editClientAa($id, $param)
	{
		return static::where('id', $id)->update($param);
	}
}
