<?php

namespace App\Requests;

class CreateCurrencyRequest
{
    private $name;

    public function __construct(string $currencyName) {

    	$this->name = $currencyName;

    }

    public function getName(): string
    {
        
    	return $this->name;

    }
}