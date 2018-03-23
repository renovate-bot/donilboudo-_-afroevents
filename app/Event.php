<?php

namespace AfroEvents;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = array('title', 'description', 'startDate', 'endDate', 'status', 'category_id', 'organizer_id');
    
    public function organizer()
    {
        return $this->hasOne('Organizer');
    }

    public function category()
    {
        return $this->hasOne('Category');
    }
}
