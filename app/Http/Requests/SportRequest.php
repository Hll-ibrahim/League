<?php

namespace App\Http\Requests;


class SportRequest extends BaseRequest
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
            ];
        }elseif($processValue == 1){
            return [
                'name' => 'string|unique:sports,name|max:30',
                'description' => 'max:200',
            ];
        }else{
            return [
                'name' => 'string|unique:sports,name|max:30',
                'description' => 'max:200',
            ];
        }
    }

}
