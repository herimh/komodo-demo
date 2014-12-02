<?php

namespace Komodo\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customer
 *
 * @ORM\Table(name="kom_customer")
 * @ORM\Entity
 */
class Customer
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
     * @ORM\Column(name="company_name", type="string", length=255, nullable=true)
     */
    private $companyName;

    /**
     * @var string
     *
     * @ORM\Column(name="fiscal_name", type="string", length=255, nullable=true)
     */
    private $fiscalName;

    /**
     * @var string
     *
     * @ORM\Column(name="rfc", type="string", length=15, nullable=true)
     */
    private $rfc;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="phone", type="integer", nullable=true)
     */
    private $phone;

    /**
     * @var float
     *
     * @ORM\Column(name="bank_account", type="integer",   nullable=true)
     */
    private $bankAccount;

    /**
     * @var string
     *
     * @ORM\Column(name="discount", type="decimal",  scale=2, nullable=true)
     */
    private $discount;

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
     * @var \Komodo\DemoBundle\Entity\PaymentMethod
     *
     * @ORM\ManyToOne(targetEntity="Komodo\DemoBundle\Entity\PaymentMethod")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="payment_method_id", referencedColumnName="id")
     * })
     */
    private $paymentMethod;

    /**
     * @var \Komodo\DemoBundle\Entity\PaymentCondition
     *
     * @ORM\ManyToOne(targetEntity="Komodo\DemoBundle\Entity\PaymentCondition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="payment_condition_id", referencedColumnName="id")
     * })
     */
    private $paymentCondition;



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
     * Set companyName
     *
     * @param string $companyName
     * @return Customer
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Get companyName
     *
     * @return string 
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Set fiscalName
     *
     * @param string $fiscalName
     * @return Customer
     */
    public function setFiscalName($fiscalName)
    {
        $this->fiscalName = $fiscalName;

        return $this;
    }

    /**
     * Get fiscalName
     *
     * @return string 
     */
    public function getFiscalName()
    {
        return $this->fiscalName;
    }

    /**
     * Set rfc
     *
     * @param string $rfc
     * @return Customer
     */
    public function setRfc($rfc)
    {
        $this->rfc = $rfc;

        return $this;
    }

    /**
     * Get rfc
     *
     * @return string 
     */
    public function getRfc()
    {
        return $this->rfc;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Customer
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phone
     *
     * @param integer $phone
     * @return Customer
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return integer 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set bankAccount
     *
     * @param integer $bankAccount
     * @return Customer
     */
    public function setBankAccount($bankAccount)
    {
        $this->bankAccount = $bankAccount;

        return $this;
    }

    /**
     * Get bankAccount
     *
     * @return integer 
     */
    public function getBankAccount()
    {
        return $this->bankAccount;
    }

    /**
     * Set discount
     *
     * @param string $discount
     * @return Customer
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Customer
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
     * @return Customer
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
     * Set paymentMethod
     *
     * @param \Komodo\DemoBundle\Entity\PaymentMethod $paymentMethod
     * @return Customer
     */
    public function setPaymentMethod(\Komodo\DemoBundle\Entity\PaymentMethod $paymentMethod = null)
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    /**
     * Get paymentMethod
     *
     * @return \Komodo\DemoBundle\Entity\PaymentMethod 
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * Set paymentCondition
     *
     * @param \Komodo\DemoBundle\Entity\PaymentCondition $paymentCondition
     * @return Customer
     */
    public function setPaymentCondition(\Komodo\DemoBundle\Entity\PaymentCondition $paymentCondition = null)
    {
        $this->paymentCondition = $paymentCondition;

        return $this;
    }

    /**
     * Get paymentCondition
     *
     * @return \Komodo\DemoBundle\Entity\PaymentCondition 
     */
    public function getPaymentCondition()
    {
        return $this->paymentCondition;
    }
}
