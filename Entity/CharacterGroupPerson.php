<?php

namespace Nilmanduil\RPGSheetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterGroupPerson
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Nilmanduil\RPGSheetBundle\Entity\CharacterGroupPersonRepository")
 */
class CharacterGroupPerson
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
     * @var CharacterGroup
     * 
     * @ORM\ManyToOne(targetEntity="Nilmanduil\RPGSheetBundle\Entity\CharacterGroup", inversedBy="members")
     * @ORM\JoinColumn(nullable=true)
     */
    private $characterGroup;
    
    /**
     * @var CharacterPerson
     * 
     * @ORM\ManyToOne(targetEntity="Nilmanduil\RPGSheetBundle\Entity\CharacterPerson", inversedBy="groups")
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
     * Set characterGroup
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\CharacterGroup $characterGroup
     *
     * @return CharacterGroupPerson
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
     * Get characterGroup
     *
     * @return \Nilmanduil\RPGSheetBundle\Entity\CharacterGroup
     */
    public function getGroup()
    {
        return $this->getCharacterGroup();
    }

    /**
     * Set characterPerson
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\CharacterPerson $characterPerson
     *
     * @return CharacterGroupPerson
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
     * Get characterPerson
     *
     * @return \Nilmanduil\RPGSheetBundle\Entity\CharacterPerson
     */
    public function getMember()
    {
        return $this->getCharacterPerson();
    }
}
