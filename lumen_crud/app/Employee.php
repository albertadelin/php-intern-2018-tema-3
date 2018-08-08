<?php

namespace App;



class Employee extends Model
{
    public $timestamps = false;

    public function companies(){

        return $this->belongsTo(Company::class, 'company_id');

    }
}
