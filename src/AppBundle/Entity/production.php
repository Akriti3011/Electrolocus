<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="production")
 */
class production
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $productionId;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $areaCode;

    /**
     * @ORM\Column(type="float")
     */
    private $elecProduced;


    /**
     * Get productionId
     *
     * @return int
     */
    public function getProductionId()
    {
        return $this->productionId;
    }

    /**
     * Set areaCode
     *
     * @param string $areaCode
     *
     * @return production
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
     * Set elecProduced
     *
     * @param float $elecProduced
     *
     * @return production
     */
    public function setElecProduced($elecProduced)
    {
        $this->elecProduced = $elecProduced;

        return $this;
    }

    /**
     * Get elecProduced
     *
     * @return float
     */
    public function getElecProduced()
    {
        return $this->elecProduced;
    }
}

