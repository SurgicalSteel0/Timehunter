<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Race;

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
     * @return array
     */
    public function rules() {

        $availableRaces = implode(',', Race::lists('id')->toArray());

        return [
            'race_id' => 'required|in:' . $availableRaces,
            'name' => 'required|min:1'
        ];
    }
}
