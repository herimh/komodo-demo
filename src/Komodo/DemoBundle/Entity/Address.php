<?php

namespace Komodo\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Address
 *
 * @ORM\Table(name="kom_address")
 * @ORM\Entity
 */
class Address
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=500, nullable=true)
     */
    private $street;

    /**
     * @var string
     *
     * @ORM\Column(name="int_number", type="string", length=20, nullable=true)
     */
    private $intNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="ext_number", type="string", length=20, nullable=true)
     */
    private $extNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="suburb", type="string", length=255, nullable=true)
     */
    private $suburb;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255, nullable=true)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="town", type="string", length=255, nullable=true)
     */
    private $town;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=255, nullable=true)
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255, nullable=true)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="postal_code", type="integer",  nullable=true)
     */
    private $postalCode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var \Komodo\DemoBundle\Entity\Customer
     *
     * @ORM\ManyToOne(targetEntity="Komodo\DemoBundle\Entity\Customer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
     * })
     */
    private $customer;

    /**
     * @var \Komodo\DemoBundle\Entity\AddressType
     *
     * @ORM\ManyToOne(targetEntity="Komodo\DemoBundle\Entity\AddressType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="address_type_id", referencedColumnName="id")
     * })
     */
    private $addressType;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set street
     *
     * @param string $street
     * @return Address
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string 
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set intNumber
     *
     * @param string $intNumber
     * @return Address
     */
    public function setIntNumber($intNumber)
    {
        $this->intNumber = $intNumber;

        return $this;
    }

    /**
     * Get intNumber
     *
     * @return string 
     */
    public function getIntNumber()
    {
        return $this->intNumber;
    }

    /**
     * Set extNumber
     *
     * @param string $extNumber
     * @return Address
     */
    public function setExtNumber($extNumber)
    {
        $this->extNumber = $extNumber;

        return $this;
    }

    /**
     * Get extNumber
     *
     * @return string 
     */
    public function getExtNumber()
    {
        return $this->extNumber;
    }

    /**
     * Set suburb
     *
     * @param string $suburb
     * @return Address
     */
    public function setSuburb($suburb)
    {
        $this->suburb = $suburb;

        return $this;
    }

    /**
     * Get suburb
     *
     * @return string 
     */
    public function getSuburb()
    {
        return $this->suburb;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Address
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set town
     *
     * @param string $town
     * @return Address
     */
    public function setTown($town)
    {
        $this->town = $town;

        return $this;
    }

    /**
     * Get town
     *
     * @return string 
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return Address
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Address
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set postalCode
     *
     * @param integer $postalCode
     * @return Address
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Get postalCode
     *
     * @return integer 
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Address
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Address
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set customer
     *
     * @param \Komodo\DemoBundle\Entity\Customer $customer
     * @return Address
     */
    public function setCustomer(\Komodo\DemoBundle\Entity\Customer $customer = null)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return \Komodo\DemoBundle\Entity\Customer 
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set addressType
     *
     * @param \Komodo\DemoBundle\Entity\AddressType $addressType
     * @return Address
     */
    public function setAddressType(\Komodo\DemoBundle\Entity\AddressType $addressType = null)
    {
        $this->addressType = $addressType;

        return $this;
    }

    /**
     * Get addressType
     *
     * @return \Komodo\DemoBundle\Entity\AddressType 
     */
    public function getAddressType()
    {
        return $this->addressType;
    }
}
