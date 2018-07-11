<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Money extends Model
{

	protected $table = "money";

	protected $fillable = ["currency_id", "amount",	"wallet_id"];

	protected $dates = ["deleted_at"];

	public function currency() {

        return $this->belongsTo(Currency::class);

    }

    public function wallet() {

        return $this->belongTo(Wallet::class);
        
    }

}
