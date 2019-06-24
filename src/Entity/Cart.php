<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * A book.
 *
 * @ORM\Entity
 * @ApiResource
 */
class Cart
{
    /**
     * @var int The id of this product.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Customer", inversedBy="carts")
     * @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
     */
    public $customer;

    /**
     * @ORM\OneToMany(targetEntity="ProductCart", mappedBy="cart")
     */
    private $productCarts;

    public function __construct()
    {
        $this->productCarts = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getCustomer()
    {
        return $this->customer;
    }
    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }

    public function getProductCarts()
    {
        return $this->productCarts;
    }
}
