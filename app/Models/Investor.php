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

    /**
     * @var array
     */
    private $transactions = [];

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

    /**
     * @return array
     */
    public function getTransactions(): array
    {
        return $this->transactions;
    }

    /**
     * @param $id
     * @return Transaction
     */
    public function getTransaction($id): Transaction
    {
        return $this->transactions[$id];
    }

    /**
     * @param Transaction $transaction
     */
    public function addTransaction(Transaction $transaction): void
    {
        $this->transactions[] = $transaction;
    }

    public function removeTransactions($id): void
    {
        unset($this->transactions[$id]);
    }


}