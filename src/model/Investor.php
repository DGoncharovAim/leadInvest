<?php

namespace Model;

class Investor
{
    private $virtualWallet;

    public function __construct(VirtualWallet $virtualWallet)
    {
        $this->setWallet($virtualWallet);
    }

    /**
     * @return VirtualWallet
     */
    public function getWallet()
    {
        return $this->virtualWallet;
    }

    /**
     * @param VirtualWallet $virtualWallet
     */
    public function setWallet($virtualWallet)
    {
        $this->virtualWallet = $virtualWallet;
    }


}