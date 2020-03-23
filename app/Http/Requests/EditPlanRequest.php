<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditPlanRequest extends FormRequest
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
            'name' => ['required', Rule::unique('plans')->where(function ($query) {
                return $query->where('id', '<>', $this->id);
            })],
            'company' => 'required|integer|min:1',
            'category' => 'required|integer|min:1',
            'featured' => 'required'
        ];
    }
}
