<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

use App\Models\Pfr;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
	public function __construct()
	{
		$this->pfr = new Pfr;
		$this->portfolio = new Portfolio;
	}

	public function listPortfolioSingle($idPfr)
	{
		$infoPfr = $this->pfr->infoPfrById($idPfr);
		$infoPortfolio = $this->portfolio->infoPortfolioForPfr($idPfr);
		return view('pages.single-fact.portfolio.list', compact('infoPfr', 'infoPortfolio'));
	}

	public function addNewProperty(Request $request, $idPfr)
	{
		$rules = [
			'client_property' => 'required|integer|min:1',
			'category_property' => 'required|in:R,I',
			'type_property' => 'required|in:HDBDP,HDBR,CON,LAN,COM,Ot',
			'year_property' => 'required',
			'price_property' => 'required',
			'loan_property' => 'required',
			'outstanding_loan' => 'required',
			'monthly_loan' => 'required',
			'monthly_loan_cpf' => 'required',
			'market_property' => 'required',
			'intention' => 'required'
		];
		$validator = Validator::make($request->all(), $rules);

		if ($validator->fails()) {
			return response()->json([
				'error' => true,
				'message' => $validator->errors()
			], 200);
		}

		$infoPfr = $this->pfr->infoPfrById($idPfr);
		if ($infoPfr) {
			$data = array(
				'client_property' => $request->client_property,
				'category_property' => $request->category_property,
				'type_property' => $request->type_property,
				'year_property' => $request->year_property,
				'price_property' => $request->price_property,
				'loan_property' => $request->loan_property,
				'outstanding_loan' => $request->outstanding_loan,
				'monthly_loan' => $request->monthly_loan,
				'monthly_loan_cpf' => $request->monthly_loan_cpf,
				'market_property' => $request->market_property,
				'intention' => $request->intention,
			);
			$infoPortfolio = $this->portfolio->infoPortfolioForPfr($idPfr);
			if ($infoPortfolio) {
				$property = json_decode($infoPortfolio->property);
				$property[] = $data;
				$param = array(
					'property' => json_encode($property)
				);
				$result = $this->portfolio->editPortfolio($idPfr, $param);
			} else {
				$param = array(
					'pfr_id' => $idPfr,
					'property' => json_encode(array($data))
				);
				$result = $this->portfolio->addNewPortfolio($param);
			}
			if ($result) {
				return response()->json([
					'error' => false,
					'message' => "Add new property successfully"
				], 200);
			} else {
				return response()->json([
					'error' => true,
					'message' => "Error"
				], 200);
			}
		} else {
			return response()->json([
				'error' => true,
				'message' => "Error"
			], 200);
		}
	}

	public function addNewInvestment(Request $request, $idPfr)
	{
		$rules = [
			'client_investment' => 'required|integer|min:1',
			'type_investment' => 'required|in:SS,B,CI,SP,BO,Ot',
			'company_investment' => 'required',
			'invested_investment' => 'required',
			'amount_investment' => 'required',
			'market_investment' => 'required',
			'source_investment' => 'required',
			'intention_investment' => 'required'
		];
		$validator = Validator::make($request->all(), $rules);

		if ($validator->fails()) {
			return response()->json([
				'error' => true,
				'message' => $validator->errors()
			], 200);
		}

		$infoPfr = $this->pfr->infoPfrById($idPfr);
		if ($infoPfr) {
			$data = array(
				'client_investment' => $request->client_investment,
				'type_investment' => $request->type_investment,
				'company_investment' => $request->company_investment,
				'invested_investment' => $request->invested_investment,
				'amount_investment' => $request->amount_investment,
				'market_investment' => $request->market_investment,
				'source_investment' => $request->source_investment,
				'intention_investment' => $request->intention_investment
			);
			$infoPortfolio = $this->portfolio->infoPortfolioForPfr($idPfr);
			if ($infoPortfolio) {
				$investment = json_decode($infoPortfolio->investment);
				$investment[] = $data;
				$param = array(
					'investment' => json_encode($investment)
				);
				$result = $this->portfolio->editPortfolio($idPfr, $param);
			} else {
				$param = array(
					'pfr_id' => $idPfr,
					'investment' => json_encode(array($data))
				);
				$result = $this->portfolio->addNewPortfolio($param);
			}
			if ($result) {
				return response()->json([
					'error' => false,
					'message' => "Add new investment successfully"
				], 200);
			} else {
				return response()->json([
					'error' => true,
					'message' => "Error"
				], 200);
			}
		} else {
			return response()->json([
				'error' => true,
				'message' => "Error"
			], 200);
		}
	}
}
