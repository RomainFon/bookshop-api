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
 * @ApiResource(
 *     attributes={"access_control"="is_granted('ROLE_USER')"},
 *     collectionOperations={
 *         "get",
 *         "delete"={"access_control"="is_granted('ROLE_ADMIN')", "access_control_message"="Seul un admin peut supprimer un client."},
 *         "post"={"access_control"="is_granted('ROLE_ADMIN')", "access_control_message"="Seul un admin peut créer un client."}
 *     }
 * )
 */
class Customer
{
    /**
     * @var int The id of this category.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    public $firstname;

    /**
     * @ORM\Column(type="string")
     */
    public $lastname;

    /**
     * @ORM\OneToMany(targetEntity="Cart", mappedBy="customer")
     */
    private $carts;

    public function __construct()
    {
        $this->carts = new ArrayCollection();
    }

    public function addCart(Cart $cart){
        $cart->customer = $this;
        $this->carts->add($cart);
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getFirstame()
    {
        return $this->firstname;
    }
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    public function getLastame()
    {
        return $this->lastname;
    }
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    public function getCarts()
    {
        return $this->carts;
    }
    public function setCarts($carts)
    {
        $this->carts = $carts;
    }

}
