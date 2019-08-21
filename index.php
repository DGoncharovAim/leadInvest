<?php

require_once './vendor/autoload.php';

use App\Models\Loan;

$secondsInday = 86400;
$loan = new Loan(time(), time() + $secondsInday);