<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pfr extends Model
{

    use SoftDeletes;

    protected $fillable = ['user_id', 'type', 'trusted_individual'];

    protected $casts = [
        'trusted_individual' => 'array'
    ];

    public function user()
    {
    	return $this->belongsTo('App\Models\User');
    }

    public function clients()
    {
    	return $this->hasMany('App\Models\Client');
    }

    public function dependants()
    {
        return $this->hasMany('App\Models\Dependant');
    }

    public function portfolio()
    {
        return $this->hasOne('App\Models\Portfolio');
    }

    public function balance()
    {
        return $this->hasOne('App\Models\Balance');
    }

    public function cashFlow()
    {
        return $this->hasOne('App\Models\CashFlow');
    }

    public function riskProfile()
    {
        return $this->hasOne('App\Models\RiskProfile');
    }

    public function cka()
    {
        return $this->hasOne('App\Models\Cka');
    }

    public function prioritiesNeed()
    {
        return $this->hasOne('App\Models\PrioritiesNeed');
    }

    public function switchingReplacement()
    {
        return $this->hasOne('App\Models\SwitchingReplacement');
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

    public function getDataRiskProfileAttribute()
    {
        return optional($this->riskProfile)->data;
    }

    public function getDataCkaAttribute()
    {
        return optional($this->cka)->data;
    }

    public function getReasonCkaAttribute()
    {
        return optional($this->cka)->reason;
    }

    public function getRatePrioritiesNeedAttribute()
    {
        return optional($this->prioritiesNeed)->rate;
    }

    public function getTotalAnnualIncomeAttribute()
    {
        $totalAnnualIncome = 0;
        $listIncome = $this->cashFlow->income;
        if ($listIncome != null) {
            $arrIncome = json_decode($listIncome);
            foreach($arrIncome as $income){
                foreach($income as $key=>$value){
                    $totalAnnualIncome += (int) $value;
                }
            }
        }
        return $totalAnnualIncome;
    }

    public function getTotalAnnualExpenseAttribute()
    {
        $totalAnnualExpense = 0;
        $listExpense = $this->cashFlow->expenses;
        if ($listExpense != null) {
            $arrExpense = json_decode($listExpense);
            foreach($arrExpense as $expenses){
                foreach($expenses as $key=>$value){
                    $totalAnnualExpense += (int) $value;
                }
            }
        }
        return $totalAnnualExpense;
    }

    public function getTotalAssetsAttribute()
    {
        $totalAssets = 0;
        $listAssets = $this->balance->assets;
        if ($listAssets != null) {
            $arrAssets = json_decode($listAssets);
            foreach($arrAssets as $assets){
                foreach($assets as $key=>$value){
                    $totalAssets += (int) $value;
                }
            }
        }
        return $totalAssets;
    }

    public function getTotalLiabilitiesAttribute()
    {
        $totalLiabilities = 0;
        $listLoan = $this->portfolio->loan;
        if ($listLoan != null) {
            $arrLoan = json_decode($listLoan);
            foreach($arrLoan as $loan){
                if ($loan->client_loan == 1) {
                    $totalLiabilities += $loan->outstanding_amount;
                }
            }
        }
        return $totalLiabilities;
    }
    /*END ATTRIBUTE*/
    
    /* DOWNLOAD PDF*/
    public function downloadPdf($id)
    {

        return static::where('id', $id)->first();
    }

    public function scopeKeyword($query, $keyword)
    {
        return $query->join('clients', 'pfrs.id', '=', 'clients.pfr_id')
        ->where('clients.name', 'LIKE', '%'.$keyword.'%');
    }

    public function client2() {
        return $this->hasOne('App\Models\Client')->latest();
    }
    
    public function client1() {
        return $this->hasOne('App\Models\Client')->oldest();
    }

    public function client_first() {
        return $this->clients()->first();
    }

    public function client_second() {
        return $this->clients()->skip(1)->first();
    }

    public function permalink()
    {
        if ($this->type == 0) {
            return route('single_fact.edit', $this->id);
        }else {
            return route('join-fact.edit', $this->id);
        }
    }
}
