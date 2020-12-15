<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donors extends Model
{
    protected $table = 'donors';
    protected $fillable = ['Name','Age','Address','Mobile','Email','BloodGroup','BloodPressure','Covidpositive','RecoveryDate','Certified'];
}
