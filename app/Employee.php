<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class Employee extends Moloquent
{
    protected $collection = 'employee';
}
