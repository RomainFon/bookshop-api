<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * A book.
 *
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 * @ApiResource
 */
class Product
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
     * @var string The name of this product.
     *
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @var string The description of this product.
     *
     * @ORM\Column(type="string")
     */
    private $description;

    /**
     * @var string The price of this product.
     *
     * @ORM\Column(type="float")
     */
    private $price;

    /**
     * @var string The stock of this product.
     *
     * @ORM\Column(type="integer")
     */
    private $stock;

    /**
     * @var string The picture of this product.
     *
     * @ORM\Column(type="string")
     */
    private $picture;

    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="products")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    private $category;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param mixed
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @param mixed
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * @param mixed
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }
    /**
     * @param mixed
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getStock()
    {
        return $this->stock;
    }
    /**
     * @param mixed
     */
    public function setStock($stock)
    {
        $this->stock = $stock;
    }

    /**
     * @return mixed
     */
    public function getPicture()
    {
        return $this->picture;
    }
    /**
     * @param mixed
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }
    /**
     * @param mixed
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

}
