<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pfr extends Model
{

    use SoftDeletes;

    protected $fillable = ['user_id', 'type'];

    public function user()
    {
    	return $this->belongsTo('App\Models\User');
    }

    public function clients()
    {
    	return $this->hasMany('App\Models\Client');
    }

    /*QUERY*/
    public function listPfr($request)
    {
        return static::all();
    }

    public function listPfrPaginate($request, $paginate)
    {
        return static::paginate($paginate);   
    }

    public function listPfrTrashPaginate($request, $paginate)
    {
        return static::onlyTrashed()->paginate($paginate);
    }

    public function infoPfrById($id)
    {
        return static::findOrFail($id);
    }

    public function addNewPfr($param)
    {
        return static::create($param);
    }

    public function editPfr($id, $param)
    {
        return static::where('id', $id)->update($param);
    }

    public function softDeletePfr($id)
    {
        return static::where('id', $id)->update([
            'deleted_at' => now()
        ]);
    }

    public function restorePfr($id)
    {
        return static::onlyTrashed()->where('id', $id)->restore();
    }
    /*END QUERY*/

    /*ATTRIBUTE*/
    public function getNameClientAttribute()
    {
    	return $this->clients()->first()->name;
    }

    public function getNameUserAddAttribute()
    {
    	return optional($this->user)->full_name;
    }

    public function getCreateDateAttribute()
    {
    	return date('F d,Y', strtotime($this->created_at));
    }

    public function getTypePfrAttribute()
    {
    	if ($this->type == 0) {
    		return "Single";
    	} else {
    		return "Join";
    	}
    }
    /*END ATTRIBUTE*/
    /* DOWNLOAD PDF*/
    public function downloadPdf($id)
    {
        
        return static::where('id', $id)->first();
    }
}
