<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LeaguesTeamsRequest extends BaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
        //return parent::roleCheck('admin');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'league_id' => 'required|exists:leagues,id',
            'team_id' => 'required|exists:teams,id',
        ];
    }
}
