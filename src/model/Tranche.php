<?php

namespace Model;

class Tranche
{
    private $maxAmount;
    private $percentage;
    private $currentAmount;

    public function __construct($percentage)
    {
        $this->setPercentage($percentage);
    }

    /**
     * @return mixed
     */
    public function getMaxAmount()
    {
        return $this->maxAmount;
    }

    /**
     * @param mixed $maxAmount
     */
    public function setMaxAmount($maxAmount): void
    {
        $this->maxAmount = $maxAmount;
    }

    /**
     * @return mixed
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

    /**
     * @param mixed $percentage
     */
    public function setPercentage($percentage): void
    {
        $this->percentage = $percentage;
    }

    /**
     * @return mixed
     */
    public function getCurrentAmount()
    {
        return $this->currentAmount;
    }

    /**
     * @param mixed $currentAmount
     */
    public function setCurrentAmount($currentAmount): void
    {
        $this->currentAmount = $currentAmount;
    }

}