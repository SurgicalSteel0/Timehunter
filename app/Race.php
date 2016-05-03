<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Race extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'strength', 'intelligence', 'vitality'
    ];

    /**
     * A race has many characters.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function character() {
        return $this->hasMany('App\Character');
    }

}
