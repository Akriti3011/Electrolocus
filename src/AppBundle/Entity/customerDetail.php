<?php

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="customerDetail")
 */
class customerDetail
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $customer_Details_Id;
    /**
     * @ORM\Column(type="integer")
     */
    private $customer_id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $lastName;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $gender;

    /**
     * @ORM\Column(type="integer")
     */
    private $contactNo;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $address;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $source;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $purpose;

    /**
     * @ORM\Column(type="integer")
     */
    private $electricityLoad;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $areaCode;

    /**
     * @ORM\Column(type="integer")
     */
    private $meterID;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $connectionType;

    /**
     * Get customer_Details_Id
     *
     * @return int
     */
    public function getcustomerDetailId()
    {
        return $this->customer_id;
    }

    /**
     * Set customerId
     *
     * @param integer $customer_id
     *
     * @return customerDetail
     */
    public function setCustomerId($customer_id)
    {
        $this->customer_id = $customer_id;

        return $this;
    }

    /**
     * Get customerId
     *
     * @return int
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return customerDetail
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return customerDetail
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return customerDetail
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set contactNo
     *
     * @param integer $contactNo
     *
     * @return customerDetail
     */
    public function setContactNo($contactNo)
    {
        $this->contactNo = $contactNo;

        return $this;
    }

    /**
     * Get contactNo
     *
     * @return int
     */
    public function getContactNo()
    {
        return $this->contactNo;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return customerDetail
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set source
     *
     * @param string $source
     *
     * @return customerDetail
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set purpose
     *
     * @param string $purpose
     *
     * @return customerDetail
     */
    public function setPurpose($purpose)
    {
        $this->purpose = $purpose;

        return $this;
    }

    /**
     * Get purpose
     *
     * @return string
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * Set electricityLoad
     *
     * @param string $electricityLoad
     *
     * @return customerDetail
     */
    public function setElectricityLoad($electricityLoad)
    {
        $this->electricityLoad = $electricityLoad;

        return $this;
    }

    /**
     * Get electricityLoad
     *
     * @return string
     */
    public function getElectricityLoad()
    {
        return $this->electricityLoad;
    }

    /**
     * Set areaCode
     *
     * @param integer $areaCode
     *
     * @return customerDetail
     */
    public function setAreaCode($areaCode)
    {
        $this->areaCode = $areaCode;

        return $this;
    }

    /**
     * Get areaCode
     *
     * @return int
     */
    public function getAreaCode()
    {
        return $this->areaCode;
    }

    /**
     * Set meterID
     *
     * @param string $meterID
     *
     * @return customerDetail
     */
    public function setMeterID($meterID)
    {
        $this->meterID = $meterID;

        return $this;
    }

    /**
     * Get meterID
     *
     * @return string
     */
    public function getMeterID()
    {
        return $this->meterID;
    }

    /**
     * Set connectionType
     *
     * @param string $connectionType
     *
     * @return customerDetail
     */
    public function setConnectionType($connectionType)
    {
        $this->connectionType = $connectionType;

        return $this;
    }

    /**
     * Get connectionType
     *
     * @return string
     */
    public function getConnectionType()
    {
        return $this->connectionType;
    }
}

