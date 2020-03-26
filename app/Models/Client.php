<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['title', 'name', 'relationship', 'gender', 'nric_passport', 'nationality', 'dob', 'marital_status', 'smoker', 'employment_status', 'occupation', 'company', 'business_nature', 'income_range', 'contact_home', 'contact_mobile', 'contact_office', 'contact_fax', 'email', 'residential_address', 'mailing_address', 'pfr_id'];

    /*QUERY*/
    public function listClient()
    {
        return static::all();
    }

    public function listClientPaginate($request, $paginate)
    {
        return static::paginate($paginate);   
    }

    public function listClientTrashPaginate($request, $paginate)
    {
        return static::onlyTrashed()->paginate($paginate);
    }

    public function infoClientById($id)
    {
        return static::findOrFail($id);
    }

    public function addNewClient($param)
    {
        return static::firstOrCreate($param);
    }

    public function editClient($id, $param)
    {
        return static::where('id', $id)->update($param);
    }

    public function softDeleteClient($id)
    {
        return static::where('id', $id)->update([
            'deleted_at' => now()
        ]);
    }

    public function restoreClient($id)
    {
        return static::onlyTrashed()->where('id', $id)->restore();
    }
    /*END QUERY*/
}
