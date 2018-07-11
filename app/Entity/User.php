<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    
    protected $table = "user";

    protected $fillable = ["name", "email"];

    public function hasWallets() {

        return $this->hasMany(Wallet::class);

    }
    
}
