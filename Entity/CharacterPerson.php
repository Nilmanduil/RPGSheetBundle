<?php

namespace Nilmanduil\RPGSheetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterPerson
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Nilmanduil\RPGSheetBundle\Entity\CharacterPersonRepository")
 */
class CharacterPerson
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
     * @var string
     *
     * @ORM\Column(name="physicalDescription", type="blob")
     */
    private $physicalDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="mentalDescription", type="blob")
     */
    private $mentalDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="background", type="blob")
     */
    private $background;

    /**
     * @var string
     *
     * @ORM\Column(name="preferredWeapon", type="string", length=255)
     */
    private $preferredWeapon;

    /**
     * @var integer
     *
     * @ORM\Column(name="healthPoints", type="integer")
     */
    private $healthPoints;

    /**
     * @var integer
     *
     * @ORM\Column(name="healthPointsMax", type="integer")
     */
    private $healthPointsMax;

    /**
     * @var integer
     *
     * @ORM\Column(name="magicPoints", type="integer")
     */
    private $magicPoints;

    /**
     * @var integer
     *
     * @ORM\Column(name="magicPointsMax", type="integer")
     */
    private $magicPointsMax;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="currentExp", type="integer")
     */
    private $currentExp;

    /**
     * @var integer
     *
     * @ORM\Column(name="dropsExp", type="integer")
     */
    private $dropsExp;
    
    /**
     * @var Race
     * 
     * @ORM\ManyToOne(targetEntity="Nilmanduil\RPGSheetBundle\Entity\Race")
     * @ORM\JoinColumn(nullable=true)
     */
    private $race;
    
    /**
     * @var CharacterClass
     * 
     * @ORM\ManyToOne(targetEntity="Nilmanduil\RPGSheetBundle\Entity\CharacterClass")
     * @ORM\JoinColumn(nullable=true)
     */
    private $characterClass;
    
    /**
     * @var Level
     * 
     * @ORM\ManyToOne(targetEntity="Nilmanduil\RPGSheetBundle\Entity\Level")
     * @ORM\JoinColumn(nullable=true)
     */
    private $level;
    
    /**
     * @var ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="Nilmanduil\RPGSheetBundle\Entity\Talent", mappedBy="characterPerson")
     */
    private $talents;
    
    /**
     * @var ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="Nilmanduil\RPGSheetBundle\Entity\InventoryLine", mappedBy="characterPerson")
     */
    private $objects;
    
    /**
     * @var ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="Nilmanduil\RPGSheetBundle\Entity\CharacterGroupPerson", mappedBy="characterPerson")
     */
    private $groups;
    
    /**
     * @var ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="Nilmanduil\RPGSheetBundle\Entity\CharacterCharacteristic", mappedBy="characterPerson")
     */
    private $characteristics;
    
    /**
     * @var ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="Nilmanduil\RPGSheetBundle\Entity\CharacterPersonSkill", mappedBy="characterPerson")
     */
    private $skills;
    
    /**
     * @var ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="Nilmanduil\RPGSheetBundle\Entity\CharacterPersonMultiSkill", mappedBy="characterPerson")
     */
    private $multiSkills;
    
    /**
     * @var ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="Nilmanduil\RPGSheetBundle\Entity\CharacterMoney", mappedBy="characterPerson")
     */
    private $devises;


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
     * @return CharacterPerson
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
     * Set physicalDescription
     *
     * @param string $physicalDescription
     *
     * @return CharacterPerson
     */
    public function setPhysicalDescription($physicalDescription)
    {
        $this->physicalDescription = $physicalDescription;

        return $this;
    }

    /**
     * Get physicalDescription
     *
     * @return string
     */
    public function getPhysicalDescription()
    {
        return $this->physicalDescription;
    }

    /**
     * Set mentalDescription
     *
     * @param string $mentalDescription
     *
     * @return CharacterPerson
     */
    public function setMentalDescription($mentalDescription)
    {
        $this->mentalDescription = $mentalDescription;

        return $this;
    }

    /**
     * Get mentalDescription
     *
     * @return string
     */
    public function getMentalDescription()
    {
        return $this->mentalDescription;
    }

    /**
     * Set background
     *
     * @param string $background
     *
     * @return CharacterPerson
     */
    public function setBackground($background)
    {
        $this->background = $background;

        return $this;
    }

    /**
     * Get background
     *
     * @return string
     */
    public function getBackground()
    {
        return $this->background;
    }

    /**
     * Set preferredWeapon
     *
     * @param string $preferredWeapon
     *
     * @return CharacterPerson
     */
    public function setPreferredWeapon($preferredWeapon)
    {
        $this->preferredWeapon = $preferredWeapon;

        return $this;
    }

    /**
     * Get preferredWeapon
     *
     * @return string
     */
    public function getPreferredWeapon()
    {
        return $this->preferredWeapon;
    }

    /**
     * Set healthPoints
     *
     * @param integer $healthPoints
     *
     * @return CharacterPerson
     */
    public function setHealthPoints($healthPoints)
    {
        $this->healthPoints = $healthPoints;

        return $this;
    }

    /**
     * Get healthPoints
     *
     * @return integer
     */
    public function getHealthPoints()
    {
        return $this->healthPoints;
    }

    /**
     * Set healthPointsMax
     *
     * @param integer $healthPointsMax
     *
     * @return CharacterPerson
     */
    public function setHealthPointsMax($healthPointsMax)
    {
        $this->healthPointsMax = $healthPointsMax;

        return $this;
    }

    /**
     * Get healthPointsMax
     *
     * @return integer
     */
    public function getHealthPointsMax()
    {
        return $this->healthPointsMax;
    }

    /**
     * Set magicPoints
     *
     * @param integer $magicPoints
     *
     * @return CharacterPerson
     */
    public function setMagicPoints($magicPoints)
    {
        $this->magicPoints = $magicPoints;

        return $this;
    }

    /**
     * Get magicPoints
     *
     * @return integer
     */
    public function getMagicPoints()
    {
        return $this->magicPoints;
    }

    /**
     * Set magicPointsMax
     *
     * @param integer $magicPointsMax
     *
     * @return CharacterPerson
     */
    public function setMagicPointsMax($magicPointsMax)
    {
        $this->magicPointsMax = $magicPointsMax;

        return $this;
    }

    /**
     * Get magicPointsMax
     *
     * @return integer
     */
    public function getMagicPointsMax()
    {
        return $this->magicPointsMax;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return CharacterPerson
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set currentExp
     *
     * @param integer $currentExp
     *
     * @return CharacterPerson
     */
    public function setCurrentExp($currentExp)
    {
        $this->currentExp = $currentExp;

        return $this;
    }

    /**
     * Get currentExp
     *
     * @return integer
     */
    public function getCurrentExp()
    {
        return $this->currentExp;
    }

    /**
     * Set dropsExp
     *
     * @param integer $dropsExp
     *
     * @return CharacterPerson
     */
    public function setDropsExp($dropsExp)
    {
        $this->dropsExp = $dropsExp;

        return $this;
    }

    /**
     * Get dropsExp
     *
     * @return integer
     */
    public function getDropsExp()
    {
        return $this->dropsExp;
    }

    /**
     * Set race
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\Race $race
     *
     * @return CharacterPerson
     */
    public function setRace(\Nilmanduil\RPGSheetBundle\Entity\Race $race = null)
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Get race
     *
     * @return \Nilmanduil\RPGSheetBundle\Entity\Race
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set characterClass
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\CharacterClass $characterClass
     *
     * @return CharacterPerson
     */
    public function setCharacterClass(\Nilmanduil\RPGSheetBundle\Entity\CharacterClass $characterClass = null)
    {
        $this->characterClass = $characterClass;

        return $this;
    }

    /**
     * Get characterClass
     *
     * @return \Nilmanduil\RPGSheetBundle\Entity\CharacterClass
     */
    public function getCharacterClass()
    {
        return $this->characterClass;
    }

    /**
     * Set level
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\Level $level
     *
     * @return CharacterPerson
     */
    public function setLevel(\Nilmanduil\RPGSheetBundle\Entity\Level $level = null)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return \Nilmanduil\RPGSheetBundle\Entity\Level
     */
    public function getLevel()
    {
        return $this->level;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->talents = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add talent
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\Talent $talent
     *
     * @return CharacterPerson
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

    /**
     * Add object
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\InventoryLine $object
     *
     * @return CharacterPerson
     */
    public function addObject(\Nilmanduil\RPGSheetBundle\Entity\InventoryLine $object)
    {
        $this->objects[] = $object;

        return $this;
    }

    /**
     * Remove object
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\InventoryLine $object
     */
    public function removeObject(\Nilmanduil\RPGSheetBundle\Entity\InventoryLine $object)
    {
        $this->objects->removeElement($object);
    }

    /**
     * Get objects
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getObjects()
    {
        return $this->objects;
    }

    /**
     * Add group
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\CharacterGroupPerson $group
     *
     * @return CharacterPerson
     */
    public function addGroup(\Nilmanduil\RPGSheetBundle\Entity\CharacterGroupPerson $group)
    {
        $this->groups[] = $group;

        return $this;
    }

    /**
     * Remove group
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\CharacterGroupPerson $group
     */
    public function removeGroup(\Nilmanduil\RPGSheetBundle\Entity\CharacterGroupPerson $group)
    {
        $this->groups->removeElement($group);
    }

    /**
     * Get groups
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * Add characteristic
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\CharacterCharacteristic $characteristic
     *
     * @return CharacterPerson
     */
    public function addCharacteristic(\Nilmanduil\RPGSheetBundle\Entity\CharacterCharacteristic $characteristic)
    {
        $this->characteristics[] = $characteristic;

        return $this;
    }

    /**
     * Remove characteristic
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\CharacterCharacteristic $characteristic
     */
    public function removeCharacteristic(\Nilmanduil\RPGSheetBundle\Entity\CharacterCharacteristic $characteristic)
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
     * Add skill
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\CharacterPersonSkill $skill
     *
     * @return CharacterPerson
     */
    public function addSkill(\Nilmanduil\RPGSheetBundle\Entity\CharacterPersonSkill $skill)
    {
        $this->skills[] = $skill;

        return $this;
    }

    /**
     * Remove skill
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\CharacterPersonSkill $skill
     */
    public function removeSkill(\Nilmanduil\RPGSheetBundle\Entity\CharacterPersonSkill $skill)
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
     * Add multiSkill
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\CharacterPersonMultiSkill $multiSkill
     *
     * @return CharacterPerson
     */
    public function addMultiSkill(\Nilmanduil\RPGSheetBundle\Entity\CharacterPersonMultiSkill $multiSkill)
    {
        $this->multiSkills[] = $multiSkill;

        return $this;
    }

    /**
     * Remove multiSkill
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\CharacterPersonMultiSkill $multiSkill
     */
    public function removeMultiSkill(\Nilmanduil\RPGSheetBundle\Entity\CharacterPersonMultiSkill $multiSkill)
    {
        $this->multiSkills->removeElement($multiSkill);
    }

    /**
     * Get multiSkills
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMultiSkills()
    {
        return $this->multiSkills;
    }

    /**
     * Add devise
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\CharacterMoney $devise
     *
     * @return CharacterPerson
     */
    public function addDevise(\Nilmanduil\RPGSheetBundle\Entity\CharacterMoney $devise)
    {
        $this->devises[] = $devise;

        return $this;
    }

    /**
     * Remove devise
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\CharacterMoney $devise
     */
    public function removeDevise(\Nilmanduil\RPGSheetBundle\Entity\CharacterMoney $devise)
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
}
