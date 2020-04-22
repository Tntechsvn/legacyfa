<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PfrActivity extends Model
{
	protected $dates = ['time'];

	public $timestamps = false;

    public function user()
    {
    	return $this->belongsTo('App\Models\User');
    }

    public function pfr()
    {
    	return $this->belongsTo('App\Models\Pfr');
    }

    public function new($pfr_id, $user_id, $type = null)
    {
    	$this->pfr_id = $pfr_id;
    	$this->user_id = $user_id;
    	$this->type = $type;
    	$this->time = now();
    	return $this->save();
    }

    public function scopeList($query)
    {
    	return $query->where('type', 0);
    }
}
