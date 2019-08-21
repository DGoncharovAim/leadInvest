<?php declare(strict_types=1);

namespace App\Models;

/**
 * Class Investor
 * @package App\Models
 */
class Investor
{
    /**
     * @var VirtualWallet
     */
    private $virtualWallet;

    public function __construct(VirtualWallet $virtualWallet)
    {
        $this->virtualWallet = $virtualWallet;
    }

    /**
     * @return VirtualWallet
     */
    public function getWallet(): VirtualWallet
    {
        return $this->virtualWallet;
    }

    /**
     * @param VirtualWallet $virtualWallet
     */
    public function setWallet($virtualWallet): void
    {
        $this->virtualWallet = $virtualWallet;
    }
}