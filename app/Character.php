<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Character extends Model {

    /**
     * Fillable fields for a character.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'race_id', 'name'
    ];

    /**
     * A character is owned by a user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() {
        return $this->belongsTo('App\User');
    }

    /**
     * A character belongs to a race.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function race() {
        return $this->belongsTo('App\Race');
    }

}
