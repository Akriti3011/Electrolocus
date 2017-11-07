<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="source")
 */
class source
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $sourceId;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $areaCode;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $elecSource;

    /**
     * @ORM\Column(type="float")
     */
    private $rate;


    /**
     * Get sourceId
     *
     * @return int
     */
    public function getsourceId()
    {
        return $this->sourceId;
    }

    /**
     * Set areaCode
     *
     * @param string $areaCode
     *
     * @return source
     */
    public function setAreaCode($areaCode)
    {
        $this->areaCode = $areaCode;

        return $this;
    }

    /**
     * Get areaCode
     *
     * @return string
     */
    public function getAreaCode()
    {
        return $this->areaCode;
    }

    /**
     * Set elecSource
     *
     * @param string $elecSource
     *
     * @return source
     */
    public function setElecSource($elecSource)
    {
        $this->elecSource = $elecSource;

        return $this;
    }

    /**
     * Get elecSource
     *
     * @return string
     */
    public function getElecSource()
    {
        return $this->elecSource;
    }

    /**
     * Set rate
     *
     * @param float $rate
     *
     * @return source
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return float
     */
    public function getRate()
    {
        return $this->rate;
    }
}

