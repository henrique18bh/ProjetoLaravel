<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    public function GetAccount()
    {
    	return "Get Account";
    }

    public static function ListAccount()
    {
    	return "List of Account";
    }
}
