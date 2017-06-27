<?php

namespace Nilmanduil\RPGSheetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Game
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Nilmanduil\RPGSheetBundle\Entity\GameRepository")
 */
class Game
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
     * @ORM\Column(name="initialHealthPoints", type="integer")
     */
    private $initialHealthPoints;

    /**
     * @var boolean
     *
     * @ORM\Column(name="hasMagicPoints", type="boolean")
     */
    private $hasMagicPoints;

    /**
     * @var integer
     *
     * @ORM\Column(name="initialCharacPoints", type="integer")
     */
    private $initialCharacPoints;

    /**
     * @var boolean
     *
     * @ORM\Column(name="hasSkills", type="boolean")
     */
    private $hasSkills;

    /**
     * @var boolean
     *
     * @ORM\Column(name="hasMultiCharacSkills", type="boolean")
     */
    private $hasMultiCharacSkills;

    /**
     * @var integer
     *
     * @ORM\Column(name="initialSkillPoints", type="integer")
     */
    private $initialSkillPoints;

    /**
     * @var boolean
     *
     * @ORM\Column(name="hasTalents", type="boolean")
     */
    private $hasTalents;

    /**
     * @var integer
     *
     * @ORM\Column(name="initialTalents", type="integer")
     */
    private $initialTalents;
    
    /**
     * @var ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="Nilmanduil\RPGSheetBundle\Entity\Characteristic", mappedBy="game")
     */
    private $characteristics;
    
    /**
     * @var ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="Nilmanduil\RPGSheetBundle\Entity\CharacterClass", mappedBy="game")
     */
    private $characterClasses;
    
    /**
     * @var ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="Nilmanduil\RPGSheetBundle\Entity\Race", mappedBy="game")
     */
    private $races;
    
    /**
     * @var ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="Nilmanduil\RPGSheetBundle\Entity\CharacterGroup", mappedBy="game")
     */
    private $characterGroups;
    
    /**
     * @var ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="Nilmanduil\RPGSheetBundle\Entity\Level", mappedBy="game")
     */
    private $levels;
    
    /**
     * @var ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="Nilmanduil\RPGSheetBundle\Entity\Money", mappedBy="game")
     */
    private $devises;
    
    /**
     * @var ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="Nilmanduil\RPGSheetBundle\Entity\Talent", mappedBy="game")
     */
    private $talents;


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
     * @return Game
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
     * Set initialHealthPoints
     *
     * @param integer $initialHealthPoints
     *
     * @return Game
     */
    public function setInitialHealthPoints($initialHealthPoints)
    {
        $this->initialHealthPoints = $initialHealthPoints;

        return $this;
    }

    /**
     * Get initialHealthPoints
     *
     * @return integer
     */
    public function getInitialHealthPoints()
    {
        return $this->initialHealthPoints;
    }

    /**
     * Set hasMagicPoints
     *
     * @param boolean $hasMagicPoints
     *
     * @return Game
     */
    public function setHasMagicPoints($hasMagicPoints)
    {
        $this->hasMagicPoints = $hasMagicPoints;

        return $this;
    }

    /**
     * Get hasMagicPoints
     *
     * @return boolean
     */
    public function getHasMagicPoints()
    {
        return $this->hasMagicPoints;
    }

    /**
     * Set initialCharacPoints
     *
     * @param integer $initialCharacPoints
     *
     * @return Game
     */
    public function setInitialCharacPoints($initialCharacPoints)
    {
        $this->initialCharacPoints = $initialCharacPoints;

        return $this;
    }

    /**
     * Get initialCharacPoints
     *
     * @return integer
     */
    public function getInitialCharacPoints()
    {
        return $this->initialCharacPoints;
    }

    /**
     * Set hasSkills
     *
     * @param boolean $hasSkills
     *
     * @return Game
     */
    public function setHasSkills($hasSkills)
    {
        $this->hasSkills = $hasSkills;

        return $this;
    }

    /**
     * Get hasSkills
     *
     * @return boolean
     */
    public function getHasSkills()
    {
        return $this->hasSkills;
    }

    /**
     * Set hasMultiCharacSkills
     *
     * @param boolean $hasMultiCharacSkills
     *
     * @return Game
     */
    public function setHasMultiCharacSkills($hasMultiCharacSkills)
    {
        $this->hasMultiCharacSkills = $hasMultiCharacSkills;

        return $this;
    }

    /**
     * Get hasMultiCharacSkills
     *
     * @return boolean
     */
    public function getHasMultiCharacSkills()
    {
        return $this->hasMultiCharacSkills;
    }

    /**
     * Set initialSkillPoints
     *
     * @param integer $initialSkillPoints
     *
     * @return Game
     */
    public function setInitialSkillPoints($initialSkillPoints)
    {
        $this->initialSkillPoints = $initialSkillPoints;

        return $this;
    }

    /**
     * Get initialSkillPoints
     *
     * @return integer
     */
    public function getInitialSkillPoints()
    {
        return $this->initialSkillPoints;
    }

    /**
     * Set hasTalents
     *
     * @param boolean $hasTalents
     *
     * @return Game
     */
    public function setHasTalents($hasTalents)
    {
        $this->hasTalents = $hasTalents;

        return $this;
    }

    /**
     * Get hasTalents
     *
     * @return boolean
     */
    public function getHasTalents()
    {
        return $this->hasTalents;
    }

    /**
     * Set initialTalents
     *
     * @param integer $initialTalents
     *
     * @return Game
     */
    public function setInitialTalents($initialTalents)
    {
        $this->initialTalents = $initialTalents;

        return $this;
    }

    /**
     * Get initialTalents
     *
     * @return integer
     */
    public function getInitialTalents()
    {
        return $this->initialTalents;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->characteristics = new \Doctrine\Common\Collections\ArrayCollection();
        $this->characterClasses = new \Doctrine\Common\Collections\ArrayCollection();
        $this->races = new \Doctrine\Common\Collections\ArrayCollection();
        $this->characterGroups = new \Doctrine\Common\Collections\ArrayCollection();
        $this->levels = new \Doctrine\Common\Collections\ArrayCollection();
        $this->devises = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add characteristic
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\Characteristic $characteristic
     *
     * @return Game
     */
    public function addCharacteristic(\Nilmanduil\RPGSheetBundle\Entity\Characteristic $characteristic)
    {
        $this->characteristics[] = $characteristic;

        return $this;
    }

    /**
     * Remove characteristic
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\Characteristic $characteristic
     */
    public function removeCharacteristic(\Nilmanduil\RPGSheetBundle\Entity\Characteristic $characteristic)
    {
        $this->characteristics->removeElement($characteristic);
    }

    /**
     * Get characteristics
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCharacteristics()
    {
        return $this->characteristics;
    }

    /**
     * Add characterClass
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\CharacterClass $characterClass
     *
     * @return Game
     */
    public function addCharacterClass(\Nilmanduil\RPGSheetBundle\Entity\CharacterClass $characterClass)
    {
        $this->characterClasses[] = $characterClass;

        return $this;
    }

    /**
     * Remove characterClass
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\CharacterClass $characterClass
     */
    public function removeCharacterClass(\Nilmanduil\RPGSheetBundle\Entity\CharacterClass $characterClass)
    {
        $this->characterClasses->removeElement($characterClass);
    }

    /**
     * Get characterClasses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCharacterClasses()
    {
        return $this->characterClasses;
    }

    /**
     * Add race
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\Race $race
     *
     * @return Game
     */
    public function addRace(\Nilmanduil\RPGSheetBundle\Entity\Race $race)
    {
        $this->races[] = $race;

        return $this;
    }

    /**
     * Remove race
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\Race $race
     */
    public function removeRace(\Nilmanduil\RPGSheetBundle\Entity\Race $race)
    {
        $this->races->removeElement($race);
    }

    /**
     * Get races
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRaces()
    {
        return $this->races;
    }

    /**
     * Add characterGroup
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\CharacterGroup $characterGroup
     *
     * @return Game
     */
    public function addCharacterGroup(\Nilmanduil\RPGSheetBundle\Entity\CharacterGroup $characterGroup)
    {
        $this->characterGroups[] = $characterGroup;

        return $this;
    }

    /**
     * Remove characterGroup
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\CharacterGroup $characterGroup
     */
    public function removeCharacterGroup(\Nilmanduil\RPGSheetBundle\Entity\CharacterGroup $characterGroup)
    {
        $this->characterGroups->removeElement($characterGroup);
    }

    /**
     * Get characterGroups
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCharacterGroups()
    {
        return $this->characterGroups;
    }

    /**
     * Add level
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\Level $level
     *
     * @return Game
     */
    public function addLevel(\Nilmanduil\RPGSheetBundle\Entity\Level $level)
    {
        $this->levels[] = $level;

        return $this;
    }

    /**
     * Remove level
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\Level $level
     */
    public function removeLevel(\Nilmanduil\RPGSheetBundle\Entity\Level $level)
    {
        $this->levels->removeElement($level);
    }

    /**
     * Get levels
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLevels()
    {
        return $this->levels;
    }

    /**
     * Add devise
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\Money $devise
     *
     * @return Game
     */
    public function addDevise(\Nilmanduil\RPGSheetBundle\Entity\Money $devise)
    {
        $this->devises[] = $devise;

        return $this;
    }

    /**
     * Remove devise
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\Money $devise
     */
    public function removeDevise(\Nilmanduil\RPGSheetBundle\Entity\Money $devise)
    {
        $this->devises->removeElement($devise);
    }

    /**
     * Get devises
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDevises()
    {
        return $this->devises;
    }

    /**
     * Add talent
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\Talent $talent
     *
     * @return Game
     */
    public function addTalent(\Nilmanduil\RPGSheetBundle\Entity\Talent $talent)
    {
        $this->talents[] = $talent;

        return $this;
    }

    /**
     * Remove talent
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\Talent $talent
     */
    public function removeTalent(\Nilmanduil\RPGSheetBundle\Entity\Talent $talent)
    {
        $this->talents->removeElement($talent);
    }

    /**
     * Get talents
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTalents()
    {
        return $this->talents;
    }
}
