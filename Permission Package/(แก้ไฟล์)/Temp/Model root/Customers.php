<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $fillable = ['name','address','tax_id','status'];
    
}
