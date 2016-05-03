<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Race extends Model {

    /**
     * A race belongs to many characters.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function character() {
        return $this->hasMany('App\Character');
    }

}
