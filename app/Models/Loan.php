<?php declare(strict_types=1);


namespace App\Models;

/**
 * Class Loan
 * @package App\Models
 */
class Loan
{

    /**
     * Loan status enable
     */
    const LOAN_STATUS_ENABLE = 1;

    /**
     * Loan status enable
     */
    const LOAN_STATUS_DISABLE = 2;

    /**
     * @var array
     */
    private $tranches;

    /**
     * @var int
     */
    private $startDate;

    /**
     * @var int
     */
    private $endDate;

    /**
     * @var int
     */
    private $status;

    /**
     * Loan constructor.
     * @param int $startDate
     * @param int $endDate
     */
    public function __construct(int $startDate, int $endDate)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    /**
     * @return array
     */
    public function getTranches(): array
    {
        return $this->tranches;
    }

    /**
     * @param Tranche $tranche
     */
    public function setTranche(Tranche $tranche): void
    {
        $this->tranches[] = $tranche;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param int $startDate
     */
    public function setStartDate(int $startDate): void
    {
        $this->startDate = $startDate;
    }

    /**
     * @return int
     */
    public function getEndDate(): int
    {
        return $this->endDate;
    }

    /**
     * @param mixed $endDate
     */
    public function setEndDate(int $endDate): void
    {
        $this->endDate = $endDate;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

}