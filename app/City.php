<?php

namespace AfroEvents;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = array('name', 'country_id');

    public function country()
    {
        return $this->hasOne('Country');
    }
}
