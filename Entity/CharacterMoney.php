<?php

namespace Nilmanduil\RPGSheetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterMoney
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Nilmanduil\RPGSheetBundle\Entity\CharacterMoneyRepository")
 */
class CharacterMoney
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
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;   
    
    /**
     * @var CharacterPerson
     * 
     * @ORM\ManyToOne(targetEntity="Nilmanduil\RPGSheetBundle\Entity\CharacterPerson", inversedBy="devises")
     * @ORM\JoinColumn(nullable=true)
     */
    private $characterPerson;
    
    /**
     * @var Money
     * 
     * @ORM\ManyToOne(targetEntity="Nilmanduil\RPGSheetBundle\Entity\Money")
     * @ORM\JoinColumn(nullable=true)
     */
    private $money;


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
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return CharacterMoney
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set characterPerson
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\CharacterPerson $characterPerson
     *
     * @return CharacterMoney
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

    /**
     * Set money
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\Money $money
     *
     * @return CharacterMoney
     */
    public function setMoney(\Nilmanduil\RPGSheetBundle\Entity\Money $money = null)
    {
        $this->money = $money;

        return $this;
    }

    /**
     * Get money
     *
     * @return \Nilmanduil\RPGSheetBundle\Entity\Money
     */
    public function getMoney()
    {
        return $this->money;
    }
}
