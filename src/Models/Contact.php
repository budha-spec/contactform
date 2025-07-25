<?php

namespace Budhaspec\Contactform\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['firstname', 'lastname', 'email', 'subject', 'message'];
}
