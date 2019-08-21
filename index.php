<?php

require_once './vendor/autoload.php';

use App\Models\VirtualWallet;
use App\Models\Investor;
use App\Models\Tranche;
use App\Models\Loan;
use App\Models\Transaction;

$wallet_1 = new VirtualWallet(1000);
$wallet_2 = new VirtualWallet(1000);
$wallet_3 = new VirtualWallet(1000);
$wallet_4 = new VirtualWallet(1000);

$investor_1 = new Investor($wallet_1);
$investor_2 = new Investor($wallet_2);
$investor_3 = new Investor($wallet_3);
$investor_4 = new Investor($wallet_4);

$investor_1->setWallet($wallet_1);
$investor_2->setWallet($wallet_2);
$investor_3->setWallet($wallet_3);
$investor_4->setWallet($wallet_4);


$loan = new Loan(new DateTime('01.10.2015'), new DateTime('15.11.2015'));

$tranche_1 = new Tranche(3, 1000);
$tranche_2 = new Tranche(6, 1000);

$tranche_1->setLoan($loan);
$tranche_2->setLoan($loan);

$loan->addTranches($tranche_1);
$loan->addTranches($tranche_2);

$transaction_1 = new Transaction(1000, new DateTime('03.10.2015'), $tranche_1, $investor_1);
$isPay_1 = $transaction_1->payByTranche();

$transaction_2 = new Transaction(1, new DateTime('04.10.2015'), $tranche_1, $investor_2);
$isPay_2 = $transaction_2->payByTranche();

$transaction_3 = new Transaction(500, new DateTime('10.10.2015'), $tranche_2, $investor_3);
$isPay_3 = $transaction_3->payByTranche();

$transaction_4 = new Transaction(1100, new DateTime('25.10.2015'), $tranche_2, $investor_4);
$isPay_4 = $transaction_4->payByTranche();
