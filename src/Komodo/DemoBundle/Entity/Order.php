<?php

namespace Komodo\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Order
 *
 * @ORM\Table(name="kom_order")
 * @ORM\Entity
 */
class Order
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
     * @var integer
     *
     * @ORM\Column(name="folio", type="integer", nullable=true)
     */
    private $folio;

    /**
     * @var string
     *
     * @ORM\Column(name="serie", type="string", length=10, nullable=true)
     */
    private $serie;

    /**
     * @var string
     *
     * @ORM\Column(name="iva_rate", type="decimal",  scale=2, nullable=false)
     */
    private $ivaRate;

    /**
     * @var string
     *
     * @ORM\Column(name="discount", type="decimal", scale=2, nullable=false)
     */
    private $discount;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_canceled", type="boolean", nullable=false, options={ "default" = 0 } )
     */
    private $isCanceled;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_invoiced", type="boolean", nullable=false, options={ "default" = 0 } )
     */
    private $isInvoiced;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set folio
     *
     * @param integer $folio
     * @return Order
     */
    public function setFolio($folio)
    {
        $this->folio = $folio;

        return $this;
    }

    /**
     * Get folio
     *
     * @return integer 
     */
    public function getFolio()
    {
        return $this->folio;
    }

    /**
     * Set serie
     *
     * @param string $serie
     * @return Order
     */
    public function setSerie($serie)
    {
        $this->serie = $serie;

        return $this;
    }

    /**
     * Get serie
     *
     * @return string 
     */
    public function getSerie()
    {
        return $this->serie;
    }

    /**
     * Set ivaRate
     *
     * @param string $ivaRate
     * @return Order
     */
    public function setIvaRate($ivaRate)
    {
        $this->ivaRate = $ivaRate;

        return $this;
    }

    /**
     * Get ivaRate
     *
     * @return string 
     */
    public function getIvaRate()
    {
        return $this->ivaRate;
    }

    /**
     * Set discount
     *
     * @param string $discount
     * @return Order
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Get discount
     *
     * @return string 
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set isCanceled
     *
     * @param boolean $isCanceled
     * @return Order
     */
    public function setIsCanceled($isCanceled)
    {
        $this->isCanceled = $isCanceled;

        return $this;
    }

    /**
     * Get isCanceled
     *
     * @return boolean 
     */
    public function getIsCanceled()
    {
        return $this->isCanceled;
    }

    /**
     * Set isInvoiced
     *
     * @param boolean $isInvoiced
     * @return Order
     */
    public function setIsInvoiced($isInvoiced)
    {
        $this->isInvoiced = $isInvoiced;

        return $this;
    }

    /**
     * Get isInvoiced
     *
     * @return boolean 
     */
    public function getIsInvoiced()
    {
        return $this->isInvoiced;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Order
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
     * @return Order
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
     * @return Order
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
}
