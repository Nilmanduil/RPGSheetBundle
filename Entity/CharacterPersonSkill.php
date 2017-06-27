<?php

namespace Nilmanduil\RPGSheetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterPersonSkill
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Nilmanduil\RPGSheetBundle\Entity\CharacterPersonSkillRepository")
 */
class CharacterPersonSkill
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
     * @ORM\ManyToOne(targetEntity="Nilmanduil\RPGSheetBundle\Entity\CharacterPerson", inversedBy="skills")
     * @ORM\JoinColumn(nullable=true)
     */
    private $characterPerson;
    
    /**
     * @var Skill
     * 
     * @ORM\ManyToOne(targetEntity="Nilmanduil\RPGSheetBundle\Entity\Skill")
     * @ORM\JoinColumn(nullable=true)
     */
    private $skill;


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
     * @return CharacterPersonSkill
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
     * @return CharacterPersonSkill
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
     * Set skill
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\Skill $skill
     *
     * @return CharacterPersonSkill
     */
    public function setSkill(\Nilmanduil\RPGSheetBundle\Entity\Skill $skill = null)
    {
        $this->skill = $skill;

        return $this;
    }

    /**
     * Get skill
     *
     * @return \Nilmanduil\RPGSheetBundle\Entity\Skill
     */
    public function getSkill()
    {
        return $this->skill;
    }
}
