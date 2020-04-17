<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddNewAffordabilityRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'payor_for_client' => 'required|in:0,1',
            'payor_relationship' => 'required_if:payor_for_client,1',
            'state' => 'required|in:0,1',
            'reason' => 'required_if:state,1'
        ];
    }
}
