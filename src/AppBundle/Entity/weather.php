<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="weather")
 */
class weather
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $weatherId;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $areaCode;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $bestSource;

    /**
     * Get weatherId
     *
     * @return int
     */
    public function getweatherId()
    {
        return $this->weatherId;
    }

    /**
     * Set areaCode
     *
     * @param string $areaCode
     *
     * @return weather
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
     * Set bestSource
     *
     * @param string $bestSource
     *
     * @return weather
     */
    public function setBestSource($bestSource)
    {
        $this->bestSource = $bestSource;

        return $this;
    }

    /**
     * Get bestSource
     *
     * @return string
     */
    public function getBestSource()
    {
        return $this->bestSource;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return weather
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get bestSource
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

}

