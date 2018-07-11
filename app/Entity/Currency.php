<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{

	protected $table = "currency";

	protected $fillable = ["name"];

	public function hasMoney() {

        return $this->hasMany(Money::class);
        
    }

}
