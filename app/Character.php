<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model {

    /**
     * A character is owned by a user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() {
        return $this->belongsTo('App\User');
    }

    /**
     * A characters has one race.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function race() {
        return $this->hasOne('App\Race');
    }

}
