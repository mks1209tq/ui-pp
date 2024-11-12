<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PassportUpdateRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'employee_id' => ['required', 'string'],
            'file_name' => ['required', 'string'],
            'is_data_correct' => ['nullable'],
            'is_data_entered' => ['nullable'],
            'passport_expiry_date' => ['nullable', 'date'],
            'visa_expiry_date' => ['nullable', 'date'],
            'user_id' => ['nullable', 'integer'],
            'is_passport' => ['required'],
            'is_visa' => ['required'],
            'is_photo' => ['required'],
            'is_no_file_uploaded' => ['required'],
            'issue' => ['nullable', 'string'],
            'verify_count' => ['nullable', 'integer'],
            're_entry' => ['nullable'],
            'verifier_id' => ['nullable', 'integer'],
            'verifier1_id' => ['nullable', 'integer'],
            'verifier2_id' => ['nullable', 'integer'],
            'verifier1' => ['nullable', 'integer'],
            'verifier2' => ['nullable', 'integer'],
            'is_issue' => ['required'],
        ];
    }
}