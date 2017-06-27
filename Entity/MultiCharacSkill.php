<?php

namespace Nilmanduil\RPGSheetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MultiCharacSkill
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Nilmanduil\RPGSheetBundle\Entity\MultiCharacSkillRepository")
 */
class MultiCharacSkill extends Skill
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
     * @var Characteristic secondBase
     * 
     * @ORM\ManyToOne(targetEntity="Nilmanduil\RPGSheetBundle\Entity\Characteristic")
     * @ORM\JoinColumn(nullable=true)
     */
    private $secondBase;


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
     * Set secondBase
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\Characteristic $secondBase
     *
     * @return MultiCharacSkill
     */
    public function setSecondBase(\Nilmanduil\RPGSheetBundle\Entity\Characteristic $secondBase = null)
    {
        $this->secondBase = $secondBase;

        return $this;
    }

    /**
     * Get secondBase
     *
     * @return \Nilmanduil\RPGSheetBundle\Entity\Characteristic
     */
    public function getSecondBase()
    {
        return $this->secondBase;
    }
}
