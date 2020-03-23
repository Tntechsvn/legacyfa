<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'referred_name', 'avatar', 'role_id', 'status'
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

    public function infoUserById($id)
    {
        return static::findOrFail($id);
    }

    public function addNewUser($param)
    {
        return static::firstOrCreate($param);
    }

    /*public function editUser($slug, $param)
    {
        return static::where('slug', $slug)->update($param);
    }*/
    /*END QUERY*/

    /*ATTRIBUTE*/
    public function getNameRoleAttribute()
    {
        return optional($this->role)->name;
    }
    /*END ATTRIBUTE*/
}
