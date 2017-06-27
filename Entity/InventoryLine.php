<?php

namespace Nilmanduil\RPGSheetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InventoryLine
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Nilmanduil\RPGSheetBundle\Entity\InventoryLineRepository")
 */
class InventoryLine
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var float
     *
     * @ORM\Column(name="quantity", type="float")
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=3000)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="details", type="string", length=3000)
     */
    private $details;
    
    /**
     * @var CharacterPerson
     * 
     * @ORM\ManyToOne(targetEntity="Nilmanduil\RPGSheetBundle\Entity\CharacterPerson", inversedBy="objects")
     * @ORM\JoinColumn(nullable=true)
     */
    private $characterPerson;


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
     * Set name
     *
     * @param string $name
     *
     * @return InventoryLine
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set quantity
     *
     * @param float $quantity
     *
     * @return InventoryLine
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return InventoryLine
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set details
     *
     * @param string $details
     *
     * @return InventoryLine
     */
    public function setDetails($details)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * Get details
     *
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Set characterPerson
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\CharacterPerson $characterPerson
     *
     * @return InventoryLine
     */
    public function setCharacterPerson(\Nilmanduil\RPGSheetBundle\Entity\CharacterPerson $characterPerson = null)
    {
        $this->characterPerson = $characterPerson;

        return $this;
    }

    /**
     * Get characterPerson
     *
     * @return \Nilmanduil\RPGSheetBundle\Entity\CharacterPerson
     */
    public function getCharacterPerson()
    {
        return $this->characterPerson;
    }
}
