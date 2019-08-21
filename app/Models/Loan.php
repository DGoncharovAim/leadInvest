<?php declare(strict_types=1);


namespace App\Models;

/**
 * Class Loan
 * @package App\Models
 */
class Loan
{

    /**
     * @var int
     */
    private $limit;

    /**
     * @var array
     */
    private $tranches;

    /**
     * @var \DateTime
     */
    private $startDate;

    /**
     * @var \DateTime
     */
    private $endDate;

    /**
     * @var bool
     */
    private $status;

    public function __construct(int $limit, \DateTime $startDate, \DateTime $endDate)
    {
        $this->limit = $limit;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    /**
     * @return mixed
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param mixed $limit
     */
    public function setLimit($limit): void
    {
        $this->limit = $limit;
    }

    /**
     * @return mixed
     */
    public function getTranches()
    {
        return $this->tranches;
    }

    /**
     * @param mixed $tranches
     */
    public function setTranches($tranches): void
    {
        $this->tranches = $tranches;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param mixed $startDate
     */
    public function setStartDate($startDate): void
    {
        $this->startDate = $startDate;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param mixed $endDate
     */
    public function setEndDate($endDate): void
    {
        $this->endDate = $endDate;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }

}