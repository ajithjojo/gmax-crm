<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateInvoiceRequest extends FormRequest {
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize() {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules() {
    return [
      'title' => [
        'nullable',
        'string',
      ],
      'invodate' => [
        'nullable',
        'date_format:Y-m-d',
      ],
      'duedate' => [
        'nullable',
        'date_format:Y-m-d',
      ],
      'taxable' => [
        'nullable',
        'boolean,'
      ],
    ];
  }
}
