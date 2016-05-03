<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class CreateCharacterRequest extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @todo auto-generate the race_id
     * @return array
     */
    public function rules() {
        return [
            'race_id' => 'required|in:1,2,3',
            'name' => 'required|min:1'
        ];
    }
}
