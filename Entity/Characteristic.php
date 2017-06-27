<?php

namespace Nilmanduil\RPGSheetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Characteristic
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Nilmanduil\RPGSheetBundle\Entity\CharacteristicRepository")
 */
class Characteristic
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
     * @var integer
     *
     * @ORM\Column(name="initialValue", type="integer")
     */
    private $initialValue;
    
    /**
     * @var Game
     * 
     * @ORM\ManyToOne(targetEntity="Nilmanduil\RPGSheetBundle\Entity\Game", inversedBy="characteristics")
     * @ORM\JoinColumn(nullable=false)
     */
    private $game;
    
    /**
     * @var ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="Nilmanduil\RPGSheetBundle\Entity\Skill", mappedBy="base")
     */
    private $skills;
    
    /**
     * @var ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="Nilmanduil\RPGSheetBundle\Entity\MultiCharacSkill", mappedBy="secondBase")
     */
    private $multiCharacSkills;


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
     * @return Characteristic
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
     * Set initialValue
     *
     * @param integer $initialValue
     *
     * @return Characteristic
     */
    public function setInitialValue($initialValue)
    {
        $this->initialValue = $initialValue;

        return $this;
    }

    /**
     * Get initialValue
     *
     * @return integer
     */
    public function getInitialValue()
    {
        return $this->initialValue;
    }

    /**
     * Set game
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\Game $game
     *
     * @return Characteristic
     */
    public function setGame(\Nilmanduil\RPGSheetBundle\Entity\Game $game)
    {
        $this->game = $game;

        return $this;
    }

    /**
     * Get game
     *
     * @return \Nilmanduil\RPGSheetBundle\Entity\Game
     */
    public function getGame()
    {
        return $this->game;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->skills = new \Doctrine\Common\Collections\ArrayCollection();
        $this->multiCharacSkills = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add skill
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\Skill $skill
     *
     * @return Characteristic
     */
    public function addSkill(\Nilmanduil\RPGSheetBundle\Entity\Skill $skill)
    {
        $this->skills[] = $skill;

        return $this;
    }

    /**
     * Remove skill
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\Skill $skill
     */
    public function removeSkill(\Nilmanduil\RPGSheetBundle\Entity\Skill $skill)
    {
        $this->skills->removeElement($skill);
    }

    /**
     * Get skills
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * Add multiCharacSkill
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\MultiCharacSkill $multiCharacSkill
     *
     * @return Characteristic
     */
    public function addMultiCharacSkill(\Nilmanduil\RPGSheetBundle\Entity\MultiCharacSkill $multiCharacSkill)
    {
        $this->multiCharacSkills[] = $multiCharacSkill;

        return $this;
    }

    /**
     * Remove multiCharacSkill
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\MultiCharacSkill $multiCharacSkill
     */
    public function removeMultiCharacSkill(\Nilmanduil\RPGSheetBundle\Entity\MultiCharacSkill $multiCharacSkill)
    {
        $this->multiCharacSkills->removeElement($multiCharacSkill);
    }

    /**
     * Get multiCharacSkills
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMultiCharacSkills()
    {
        return $this->multiCharacSkills;
    }
}
