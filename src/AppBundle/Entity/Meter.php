<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="Meter")
 */
class Meter
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $MId;
    /**
     * @ORM\Column(type="integer")
     */
    private $meterId;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $meterReading;

    /**
     * Get MId
     *
     * @return string
     */
    public function getMId()
    {
        return $this->MId;
    }

    /**
     * Set meterId
     *
     * @param string $meterId
     *
     * @return Meter
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
     * Set meterReading
     *
     * @param string $meterReading
     *
     * @return Meter
     */
    public function setMeterReading($meterReading)
    {
        $this->meterReading = $meterReading;

        return $this;
    }

    /**
     * Get meterReading
     *
     * @return string
     */
    public function getMeterReading()
    {
        return $this->meterReading;
    }
}

