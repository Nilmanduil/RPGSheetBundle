<?php

namespace Nilmanduil\RPGSheetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GroupMoney
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Nilmanduil\RPGSheetBundle\Entity\GroupMoneyRepository")
 */
class GroupMoney
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
     * @var CharacterGroup
     * 
     * @ORM\ManyToOne(targetEntity="Nilmanduil\RPGSheetBundle\Entity\CharacterGroup", inversedBy="devises")
     * @ORM\JoinColumn(nullable=true)
     */
    private $characterGroup;
    
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
     * @return GroupMoney
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
     * Set characterGroup
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\CharacterGroup $characterGroup
     *
     * @return GroupMoney
     */
    public function setCharacterGroup(\Nilmanduil\RPGSheetBundle\Entity\CharacterGroup $characterGroup = null)
    {
        $this->characterGroup = $characterGroup;

        return $this;
    }

    /**
     * Get characterGroup
     *
     * @return \Nilmanduil\RPGSheetBundle\Entity\CharacterGroup
     */
    public function getCharacterGroup()
    {
        return $this->characterGroup;
    }

    /**
     * Set money
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\Money $money
     *
     * @return GroupMoney
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
