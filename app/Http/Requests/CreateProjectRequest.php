<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProjectRequest extends FormRequest {
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
      'name' => [
        'required',
        'filled',
        'string',
      ],
      'client' => [
        'required',
        'exists:clients,id',
      ],
      'status' => [
        'nullable',
        'integer',
      ],
      'description' => [
        'nullable',
        'string',
      ],
      'starts_at' => [
        'required',
        'date_format:Y-m-d',
      ],
      'deadline' => [
        'required',
        'date_format:Y-m-d',
      ],
    ];
  }

  public function validated() {
    $data = parent::validated();

    if ( isset( $data['client'] ) ) {
      $data['client_id'] = $data['client'];
      unset( $data['client'] );
    }

    return $data;
  }
}