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
		$arrProperty = (array) json_decode($infoPortfolio->property);
		$arrInvestment = (array) json_decode($infoPortfolio->investment);
		$arrSaving = (array) json_decode($infoPortfolio->saving);
		$arrCpf = (array) json_decode($infoPortfolio->cpf);
		$arrInsurance = (array) json_decode($infoPortfolio->insurance);
		$arrLoan = (array) json_decode($infoPortfolio->loan);
		return view('pages.single-fact.portfolio.list', compact('infoPfr', 'infoPortfolio', 'arrProperty', 'arrInvestment', 'arrSaving', 'arrCpf', 'arrInsurance', 'arrLoan'));
	}

	public function addNewProperty(Request $request, $idPfr)
	{
		$rules = [
			'client_property' => 'required|integer|min:1',
			'category_property' => 'required|in:R,I',
			'type_property' => 'required|in:HDBDP,HDBR,CON,LAN,COM,Ot',
			'market_property' => 'required',
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
				'year_property' => $request->year_property != null ? $request->year_property : "",
				'price_property' => $request->price_property != null ? $request->price_property : "",
				'loan_property' => $request->loan_property != null ? $request->loan_property : "",
				'outstanding_loan' => $request->outstanding_loan != null ? $request->outstanding_loan : "",
				'monthly_loan' => $request->monthly_loan != null ? $request->monthly_loan : "",
				'monthly_loan_cpf' => $request->monthly_loan_cpf != null ? $request->monthly_loan_cpf : "",
				'market_property' => $request->market_property,
				'intention' => $request->intention != null ? $request->intention : ""
			);
			$infoPortfolio = $this->portfolio->infoPortfolioForPfr($idPfr);
			if ($infoPortfolio) {
				$property = (array) json_decode($infoPortfolio->property);
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

	public function deleteProperty($idPfr, $position)
	{
		$infoPortfolio = $this->portfolio->infoPortfolioForPfr($idPfr);
		if ($infoPortfolio) {
			$property = (array) json_decode($infoPortfolio->property);
			array_splice($property, $position - 1, 1);
			$param = array(
				'property' => $property
			);
			$resultDeleteProperty = $this->portfolio->editPortfolio($idPfr, $param);
			if ($resultDeleteProperty) {
				return response()->json([
					'error' => false,
					'message' => "Delete property successfully"
				], 200);
			} else {
				return response()->json([
					'error' => true,
					'message' => "Delete property error"
				], 200);
			}
		} else {
			return response()->json([
				'error' => true,
				'message' => "Portfolio not found"
			], 200);
		}
	}

	public function addNewInvestment(Request $request, $idPfr)
	{
		$rules = [
			'client_investment' => 'required|integer|min:1',
			'type_investment' => 'required|in:SS,B,CI,SP,BO,Ot',
			'market_investment' => 'required',
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
				'company_investment' => $request->company_investment != null ? $request->company_investment : "",
				'invested_investment' => $request->invested_investment != null ? $request->invested_investment : "",
				'amount_investment' => $request->amount_investment != null ? $request->amount_investment : "",
				'market_investment' => $request->market_investment,
				'source_investment' => $request->source_investment != null ? $request->source_investment : "",
				'intention_investment' => $request->intention_investment != null ? $request->intention_investment : ""
			);
			$infoPortfolio = $this->portfolio->infoPortfolioForPfr($idPfr);
			if ($infoPortfolio) {
				$investment = (array) json_decode($infoPortfolio->investment);
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

	public function deleteInvestment($idPfr, $position)
	{
		$infoPortfolio = $this->portfolio->infoPortfolioForPfr($idPfr);
		if ($infoPortfolio) {
			$investment = (array) json_decode($infoPortfolio->investment);
			array_splice($investment, $position - 1, 1);
			$param = array(
				'investment' => $investment
			);
			$resultDeleteProperty = $this->portfolio->editPortfolio($idPfr, $param);
			if ($resultDeleteProperty) {
				return response()->json([
					'error' => false,
					'message' => "Delete investment successfully"
				], 200);
			} else {
				return response()->json([
					'error' => true,
					'message' => "Delete investment error"
				], 200);
			}
		} else {
			return response()->json([
				'error' => true,
				'message' => "Portfolio not found"
			], 200);
		}
	}

	public function addNewSaving(Request $request, $idPfr)
	{
		$rules = [
			'client_saving' => 'required|integer|min:1',
			'type_deposit' => 'required|in:BSA,FD',
			'amount_saving' => 'required',
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
				'client_saving' => $request->client_saving,
				'type_deposit' => $request->type_deposit,
				'bank_saving' => $request->bank_saving != null ? $request->bank_saving : "",
				'deposit_year' => $request->deposit_year != null ? $request->deposit_year : "",
				'amount_saving' => $request->amount_saving,
				'intention_saving' => $request->intention_saving != null ? $request->intention_saving : "",
			);
			$infoPortfolio = $this->portfolio->infoPortfolioForPfr($idPfr);
			if ($infoPortfolio) {
				$saving = (array) json_decode($infoPortfolio->saving);
				$saving[] = $data;
				$param = array(
					'saving' => json_encode($saving)
				);
				$result = $this->portfolio->editPortfolio($idPfr, $param);
			} else {
				$param = array(
					'pfr_id' => $idPfr,
					'saving' => json_encode(array($data))
				);
				$result = $this->portfolio->addNewPortfolio($param);
			}
			if ($result) {
				return response()->json([
					'error' => false,
					'message' => "Add new saving successfully"
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

	public function deleteSaving($idPfr, $position)
	{
		$infoPortfolio = $this->portfolio->infoPortfolioForPfr($idPfr);
		if ($infoPortfolio) {
			$saving = (array) json_decode($infoPortfolio->saving);
			array_splice($saving, $position - 1, 1);
			$param = array(
				'saving' => $saving
			);
			$resultDeleteProperty = $this->portfolio->editPortfolio($idPfr, $param);
			if ($resultDeleteProperty) {
				return response()->json([
					'error' => false,
					'message' => "Delete saving successfully"
				], 200);
			} else {
				return response()->json([
					'error' => true,
					'message' => "Delete saving error"
				], 200);
			}
		} else {
			return response()->json([
				'error' => true,
				'message' => "Portfolio not found"
			], 200);
		}
	}

	public function addNewCpf(Request $request, $idPfr)
	{
		$rules = [
			'client_cpf' => 'required|integer|min:1',
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
				'client_cpf' => $request->client_cpf,
				'ordinary_account' => $request->ordinary_account != null ? $request->ordinary_account : "",
				'special_account' => $request->special_account != null ? $request->special_account : "",
				'medisave_account' => $request->medisave_account != null ? $request->medisave_account : "",
				'retirement_account' => $request->retirement_account != null ? $request->retirement_account : "",
			);
			$infoPortfolio = $this->portfolio->infoPortfolioForPfr($idPfr);
			if ($infoPortfolio) {
				$cpf = (array) json_decode($infoPortfolio->cpf);
				$cpf[] = $data;
				$param = array(
					'cpf' => json_encode($cpf)
				);
				$result = $this->portfolio->editPortfolio($idPfr, $param);
			} else {
				$param = array(
					'pfr_id' => $idPfr,
					'cpf' => json_encode(array($data))
				);
				$result = $this->portfolio->addNewPortfolio($param);
			}
			if ($result) {
				return response()->json([
					'error' => false,
					'message' => "Add new cpf successfully"
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

	public function deleteCpf($idPfr, $position)
	{
		$infoPortfolio = $this->portfolio->infoPortfolioForPfr($idPfr);
		if ($infoPortfolio) {
			$cpf = (array) json_decode($infoPortfolio->cpf);
			array_splice($cpf, $position - 1, 1);
			$param = array(
				'cpf' => $cpf
			);
			$resultDeleteProperty = $this->portfolio->editPortfolio($idPfr, $param);
			if ($resultDeleteProperty) {
				return response()->json([
					'error' => false,
					'message' => "Delete cpf successfully"
				], 200);
			} else {
				return response()->json([
					'error' => true,
					'message' => "Delete cpf error"
				], 200);
			}
		} else {
			return response()->json([
				'error' => true,
				'message' => "Portfolio not found"
			], 200);
		}
	}

	public function addNewInsurance(Request $request, $idPfr)
	{
		$rules = [
			'client_insurance' => 'required|integer|min:1',
			'status_insurance' => 'required|in:PO & INS,INS,PO',
			'policy_type' => 'in:WL,IL,EN,TE,AC,HO,DI,Ot',
			'frequency_insurance' => 'in:M,A,S,H,Q',
			'source_fund' => 'in:Cash,CPF,SRS',
			'estimated_current_cash' => 'required_if:policy_type,HO',
			'insurance_hospital' => 'sometimes|min:0|max:1',
			'ward_covered' => 'in:A,B1,B2,C',
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
				'client_insurance' => $request->client_insurance,
				'status_insurance' => $request->status_insurance,
				'insurer_insurance' => $request->insurer_insurance,
				'policy_type' => $request->policy_type != null ? $request->policy_type : "",
				'sa_death' => $request->sa_death != null ? $request->sa_death : "",
				'sa_tpd' => $request->sa_tpd != null ? $request->tpd : "",
				'sa_ci' => $request->sa_ci != null ? $request->sa_ci : "",
				'sa_accident' => $request->sa_accident != null ? $request->sa_accident : "",
				'year_purchased' => $request->year_purchased != null ? $request->year_purchased : "",
				'policy_term' => $request->policy_term != null ? $request->policy_term : "",
				'frequency_insurance' => $request->frequency_insurance,
				'source_fund' => $request->source_fund,
				'premium_insurance' => $request->premium_insurance != null ? $request->premium_insurance : "",
				'maturity_year' => $request->maturity_year != null ? $request->maturity_year : "",
				'estimated_maturity' => $request->estimated_maturity != null ? $request->estimated_maturity : "",
				'estimated_current_cash' => $request->estimated_current_cash,
				'existing_plan' => $request->existing_plan != null ? $request->existing_plan : "",
				'insurance_hospital' => $request->insurance_hospital,
				'ward_covered' => $request->ward_covered,
				'additional_insurance' => $request->additional_insurance != null ? $request->additional_insurance : "",
			);
			$infoPortfolio = $this->portfolio->infoPortfolioForPfr($idPfr);
			if ($infoPortfolio) {
				$insurance = (array) json_decode($infoPortfolio->insurance);
				$insurance[] = $data;
				$param = array(
					'insurance' => json_encode($insurance)
				);
				$result = $this->portfolio->editPortfolio($idPfr, $param);
			} else {
				$param = array(
					'pfr_id' => $idPfr,
					'insurance' => json_encode(array($data))
				);
				$result = $this->portfolio->addNewPortfolio($param);
			}
			if ($result) {
				return response()->json([
					'error' => false,
					'message' => "Add new insurance successfully"
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

	public function deleteInsurance($idPfr, $position)
	{
		$infoPortfolio = $this->portfolio->infoPortfolioForPfr($idPfr);
		if ($infoPortfolio) {
			$insurance = (array) json_decode($infoPortfolio->insurance);
			array_splice($insurance, $position - 1, 1);
			$param = array(
				'insurance' => $insurance
			);
			$resultDeleteProperty = $this->portfolio->editPortfolio($idPfr, $param);
			if ($resultDeleteProperty) {
				return response()->json([
					'error' => false,
					'message' => "Delete insurance successfully"
				], 200);
			} else {
				return response()->json([
					'error' => true,
					'message' => "Delete insurance error"
				], 200);
			}
		} else {
			return response()->json([
				'error' => true,
				'message' => "Portfolio not found"
			], 200);
		}
	}

	public function addNewLoan(Request $request, $idPfr)
	{
		$rules = [
			'client_loan' => 'required|integer|min:1',
			'type_loan' => 'required|in:V,R,E,CC,PL,O,Ot',
			'outstanding_amount' => 'required'
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
				'client_loan' => $request->client_loan,
				'type_loan' => $request->type_loan,
				'term_loan' => $request->term_loan != null ? $request->term_loan : "",
				'year_loan' => $request->year_loan != null ? $request->year_loan : "",
				'amount_borrowed' => $request->amount_borrowed != null ? $request->amount_borrowed : "",
				'outstanding_amount' => $request->outstanding_amount,
				'lender_loan' => $request->lender_loan != null ? $request->lender_loan : "",
				'interest_rate' => $request->interest_rate != null ? $request->interest_rate : "",
				'repayment_cash' => $request->repayment_cash != null ? $request->repayment_cash : ""
			);
			$infoPortfolio = $this->portfolio->infoPortfolioForPfr($idPfr);
			if ($infoPortfolio) {
				$loan = (array) json_decode($infoPortfolio->loan);
				$loan[] = $data;
				$param = array(
					'loan' => json_encode($loan)
				);
				$result = $this->portfolio->editPortfolio($idPfr, $param);
			} else {
				$param = array(
					'pfr_id' => $idPfr,
					'loan' => json_encode(array($data))
				);
				$result = $this->portfolio->addNewPortfolio($param);
			}
			if ($result) {
				return response()->json([
					'error' => false,
					'message' => "Add new loan successfully"
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

	public function deleteLoan($idPfr, $position)
	{
		$infoPortfolio = $this->portfolio->infoPortfolioForPfr($idPfr);
		if ($infoPortfolio) {
			$loan = (array) json_encode($infoPortfolio->loan);
			array_splice($loan, $position - 1, 1);
			$param = array(
				'loan' => $loan
			);
			$resultDeleteProperty = $this->portfolio->editPortfolio($idPfr, $param);
			if ($resultDeleteProperty) {
				return response()->json([
					'error' => false,
					'message' => "Delete loan successfully"
				], 200);
			} else {
				return response()->json([
					'error' => true,
					'message' => "Delete loan error"
				], 200);
			}
		} else {
			return response()->json([
				'error' => true,
				'message' => "Portfolio not found"
			], 200);
		}
	}
}
