<?php

namespace App\Services;

use Illuminate\Support\Collection;
use App\Entity\Wallet;
use App\Requests\CreateWalletRequest;
use App\Entity\Currency;

class WalletService implements WalletServiceInterface {

    public function findByUser(int $userId): ?Wallet {

    	return Wallet::where('user_id', $userId)->first();

    }

    public function create(CreateWalletRequest $request): Wallet {

   		$wallet = $this->findByUser($request->getUserId());

    	if($wallet == null) {

    		$wallet = new Wallet();
        	$wallet->user_id = $request->getUserId();
        	$wallet->save();
        	return $wallet;
            
        } else {

        	throw new \LogicException();

        }   		

    }

    public function findCurrencies(int $walletId): Collection {

    	return Currency::whereHas('hasMoney', 
    		function ($query) use ($walletId){
    			$query->where('wallet_id', $walletId);
        	}
        )->get();
    	
    }

}