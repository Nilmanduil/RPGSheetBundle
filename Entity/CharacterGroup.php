<?php

namespace Nilmanduil\RPGSheetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterGroup
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Nilmanduil\RPGSheetBundle\Entity\CharacterGroupRepository")
 */
class CharacterGroup
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
     * @var Game
     * 
     * @ORM\ManyToOne(targetEntity="Nilmanduil\RPGSheetBundle\Entity\Game", inversedBy="characterGroups")
     * @ORM\JoinColumn(nullable=false)
     */
    private $game;
    
    /**
     * @var ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="Nilmanduil\RPGSheetBundle\Entity\CharacterGroupPerson", mappedBy="characterGroup")
     */
    private $members;
    
    /**
     * @var ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="Nilmanduil\RPGSheetBundle\Entity\GroupMoney", mappedBy="characterGroup")
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
     * @return CharacterGroup
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
     * Set game
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\Game $game
     *
     * @return CharacterGroup
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
        $this->members = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add member
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\CharacterGroupPerson $member
     *
     * @return CharacterGroup
     */
    public function addMember(\Nilmanduil\RPGSheetBundle\Entity\CharacterGroupPerson $member)
    {
        $this->members[] = $member;

        return $this;
    }

    /**
     * Remove member
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\CharacterGroupPerson $member
     */
    public function removeMember(\Nilmanduil\RPGSheetBundle\Entity\CharacterGroupPerson $member)
    {
        $this->members->removeElement($member);
    }

    /**
     * Get members
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * Add devise
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\GroupMoney $devise
     *
     * @return CharacterGroup
     */
    public function addDevise(\Nilmanduil\RPGSheetBundle\Entity\GroupMoney $devise)
    {
        $this->devises[] = $devise;

        return $this;
    }

    /**
     * Remove devise
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\GroupMoney $devise
     */
    public function removeDevise(\Nilmanduil\RPGSheetBundle\Entity\GroupMoney $devise)
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
