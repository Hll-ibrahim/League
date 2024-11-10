<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LeagueRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $processValue = $this->input('process');
        if($processValue == 3){
            return [
                'name' => 'string|max:30',
                'description' => 'max:200',
                'sport_id' => 'integer|exists:sports,id',
                'season_id' => 'integer|exists:seasons,id',
                'league_type_id' => 'integer|exists:league_types,id',
            ];
        }elseif($processValue == 1){
            return [
                'name' => 'string|unique:leagues,name|max:30',
                'description' => 'max:200',
                'sport_id' => 'integer|exists:sports,id',
                'season_id' => 'integer|exists:seasons,id',
                'league_type_id' => 'integer|exists:league_types,id',
            ];
        }
        else{
            return [
                'name' => 'string|unique:leagues,name|max:30',
                'description' => 'max:200',
                'sport_id' => 'integer|exists:sports,id',
                'season_id' => 'integer|exists:seasons,id',
                'league_type_id' => 'integer|exists:league_types,id',
            ];
        }

    }
}
