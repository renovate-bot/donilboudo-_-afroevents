<?php

namespace AfroEvents;

use Illuminate\Database\Eloquent\Model;

class Organizer extends Model
{
    protected $fillable = ['name', 'description', 'facebookLink'];
}
