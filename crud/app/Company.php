<?php

namespace App;


class Company extends Model
{
    public $timestamps = false;
    

    public function employees(){

        return $this->hasMany(Employee::class, 'company_id');

    }
}
