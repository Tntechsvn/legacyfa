<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'full_name', 'email', 'password', 'preferred_name', 'avatar', 'role_id', 'status'
    ];

    protected $dates = ['deleted_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }

    /*QUERY*/
    public function hasPermission($permission)
    {
        return !! optional(optional($this->role)->permissions)->contains($permission);
    }

    public function listUser()
    {
        return static::all();
    }

    public function listUserPaginate($request, $paginate)
    {
        return static::paginate($paginate);   
    }

    public function listUserTrashPaginate($request, $paginate)
    {
        return static::onlyTrashed()->paginate($paginate);
    }

    public function infoUserById($id)
    {
        return static::findOrFail($id);
    }

    public function addNewUser($param)
    {
        return static::firstOrCreate($param);
    }

    public function editUser($id, $param)
    {
        return static::where('id', $id)->update($param);
    }

    public function softDeleteUser($id)
    {
        return static::where('id', $id)->update([
            'deleted_at' => now()
        ]);
    }

    public function restoreUser($id)
    {
        return static::onlyTrashed()->where('id', $id)->restore();
    }

    public function downloadPdf($id)
    {
        return static::where('id', $id)->first();
    }
    /*END QUERY*/

    /*ATTRIBUTE*/
    public function getNameRoleAttribute()
    {
        return optional($this->role)->name;
    }

    public function getLevelUserAttribute()
    {
        return optional($this->role)->level;
    }
    /*END ATTRIBUTE*/

    public function scopeKeyword($query, $keyword)
    {
        return $query->where('full_name', 'LIKE', '%'.$keyword.'%')
                ->orWhere('preferred_name', 'LIKE', '%'.$keyword.'%')
                ->orWhere('email', 'LIKE', '%'.$keyword.'%');
    }

}
