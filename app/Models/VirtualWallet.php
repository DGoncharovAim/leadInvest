<?php

namespace App\Models;


class VirtualWallet
{
    private $amount;

    public function __construct($amount)
    {
        $this->setAmount($amount);
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

}