<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="Bill")
 */
class Bill
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $billId;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $meterId;

    /**
     * @ORM\Column(type="float")
     */
    private $billAmount;

    /**
     * @ORM\Column(type="string", scale=50)
     */
    private $billMonth;

    /**
     * @ORM\Column(type="string", scale=50)
     */
    private $billYear;


    /**
     * Get billId
     *
     * @return int
     */
    public function getbillId()
    {
        return $this->billId;
    }

    /**
     * Set meterId
     *
     * @param string $meterId
     *
     * @return Bill
     */
    public function setMeterId($meterId)
    {
        $this->meterId = $meterId;

        return $this;
    }

    /**
     * Get meterId
     *
     * @return string
     */
    public function getMeterId()
    {
        return $this->meterId;
    }

    /**
     * Set billAmount
     *
     * @param float $billAmount
     *
     * @return Bill
     */
    public function setBillAmount($billAmount)
    {
        $this->billAmount = $billAmount;

        return $this;
    }

    /**
     * Get billAmount
     *
     * @return float
     */
    public function getBillAmount()
    {
        return $this->billAmount;
    }

    /**
     * Set billMonth
     *
     * @param string $billMonth
     *
     * @return Bill
     */
    public function setBillMonth($billMonth)
    {
        $this->billMonth = $billMonth;

        return $this;
    }

    /**
     * Get billMonth
     *
     * @return string
     */
    public function getBillMonth()
    {
        return $this->billMonth;
    }

    /**
     * Set billYear
     *
     * @param string $billYear
     *
     * @return Bill
     */
    public function setBillYear($billYear)
    {
        $this->billYear = $billYear;

        return $this;
    }

    /**
     * Get billYear
     *
     * @return string
     */
    public function getBillYear()
    {
        return $this->billYear;
    }
}

