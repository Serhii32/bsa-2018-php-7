<?php

use Illuminate\Database\Seeder;
use App\Entity\Wallet;


class WalletTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    	factory(Wallet::class, 10)->create();
        
    }
}
