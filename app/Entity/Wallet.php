<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wallet extends Model
{

	use SoftDeletes;

	protected $table = "wallet";

	protected $fillable = ["user_id"];

	protected $dates = ["deleted_at"];

	public function hasMoney() {

        return $this->hasMany(Money::class);

    }

    public function belongsUser() {

        return $this->belongsTo(User::class);

    }

}
