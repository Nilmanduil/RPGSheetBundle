<?php

namespace Nilmanduil\RPGSheetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterPersonMultiSkill
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Nilmanduil\RPGSheetBundle\Entity\CharacterPersonMultiSkillRepository")
 */
class CharacterPersonMultiSkill
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
     * @ORM\ManyToOne(targetEntity="Nilmanduil\RPGSheetBundle\Entity\CharacterPerson", inversedBy="multiSkills")
     * @ORM\JoinColumn(nullable=true)
     */
    private $characterPerson;
    
    /**
     * @var MultiCharacSkill
     * 
     * @ORM\ManyToOne(targetEntity="Nilmanduil\RPGSheetBundle\Entity\MultiCharacSkill")
     * @ORM\JoinColumn(nullable=true)
     */
    private $multiCharacSkill;


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
     * @return CharacterPersonMultiSkill
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
     * @return CharacterPersonMultiSkill
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
     * Set multiCharacSkill
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\MultiCharacSkill $multiCharacSkill
     *
     * @return CharacterPersonMultiSkill
     */
    public function setMultiCharacSkill(\Nilmanduil\RPGSheetBundle\Entity\MultiCharacSkill $multiCharacSkill = null)
    {
        $this->multiCharacSkill = $multiCharacSkill;

        return $this;
    }

    /**
     * Get multiCharacSkill
     *
     * @return \Nilmanduil\RPGSheetBundle\Entity\MultiCharacSkill
     */
    public function getMultiCharacSkill()
    {
        return $this->multiCharacSkill;
    }
}
