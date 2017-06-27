<?php

namespace Nilmanduil\RPGSheetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterCharacteristic
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Nilmanduil\RPGSheetBundle\Entity\CharacterCharacteristicRepository")
 */
class CharacterCharacteristic
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
     * @ORM\Column(name="value", type="integer")
     */
    private $value;
    
    /**
     * @var CharacterPerson
     * 
     * @ORM\ManyToOne(targetEntity="Nilmanduil\RPGSheetBundle\Entity\CharacterPerson", inversedBy="characteristics")
     * @ORM\JoinColumn(nullable=true)
     */
    private $characterPerson;
    
    /**
     * @var Characteristic
     * 
     * @ORM\ManyToOne(targetEntity="Nilmanduil\RPGSheetBundle\Entity\Characteristic")
     * @ORM\JoinColumn(nullable=true)
     */
    private $characteristic;


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
     * Set value
     *
     * @param integer $value
     *
     * @return CharacterCharacteristic
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return integer
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set characterPerson
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\CharacterPerson $characterPerson
     *
     * @return CharacterCharacteristic
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
     * Set characteristic
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\Characteristic $characteristic
     *
     * @return CharacterCharacteristic
     */
    public function setCharacteristic(\Nilmanduil\RPGSheetBundle\Entity\Characteristic $characteristic = null)
    {
        $this->characteristic = $characteristic;

        return $this;
    }

    /**
     * Get characteristic
     *
     * @return \Nilmanduil\RPGSheetBundle\Entity\Characteristic
     */
    public function getCharacteristic()
    {
        return $this->characteristic;
    }
}
