<?php declare(strict_types=1);

namespace App\Models;

/**
 * Class Tranche
 * @package App\Models
 */
class Tranche
{

    /**
     * @var float
     */
    private $maxAmount;

    /**
     * @var float
     */
    private $percentage;

    /**
     * @var float
     */
    private $currentAmount;

    public function __construct(float $percentage)
    {
        $this->setPercentage($percentage);
    }

    /**
     * @return float
     */
    public function getMaxAmount(): float
    {
        return $this->maxAmount;
    }

    /**
     * @param float $maxAmount
     */
    public function setMaxAmount(float $maxAmount): void
    {
        $this->maxAmount = $maxAmount;
    }

    /**
     * @return float
     */
    public function getPercentage(): float
    {
        return $this->percentage;
    }

    /**
     * @param float $percentage
     */
    public function setPercentage(float $percentage): void
    {
        $this->percentage = $percentage;
    }

    /**
     * @return float
     */
    public function getCurrentAmount(): float
    {
        return $this->currentAmount;
    }

    /**
     * @param float $currentAmount
     */
    public function setCurrentAmount(float $currentAmount): void
    {
        $this->currentAmount = $currentAmount;
    }

}