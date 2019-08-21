<?php declare(strict_types=1);

namespace App\Models;

/**
 * Class VirtualWallet
 * @package App\Models
 */
class VirtualWallet
{
    /**
     * @var float
     */
    private $amount;

    /**
     * VirtualWallet constructor.
     * @param float $amount
     */
    public function __construct(float $amount)
    {
        $this->setAmount($amount);
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     */
    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

}