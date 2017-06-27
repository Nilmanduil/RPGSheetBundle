<?php

namespace Nilmanduil\RPGSheetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Skill
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Nilmanduil\RPGSheetBundle\Entity\SkillRepository")
 */
class Skill
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
     * @var boolean
     *
     * @ORM\Column(name="needed", type="boolean")
     */
    private $needed;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="blob")
     */
    private $description;
    
    /**
     * @var Characteristic base
     * 
     * @ORM\ManyToOne(targetEntity="Nilmanduil\RPGSheetBundle\Entity\Characteristic")
     * @ORM\JoinColumn(nullable=true)
     */
    private $base;


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
     * @return Skill
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
     * @return Skill
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
     * Set needed
     *
     * @param boolean $needed
     *
     * @return Skill
     */
    public function setNeeded($needed)
    {
        $this->needed = $needed;

        return $this;
    }

    /**
     * Get needed
     *
     * @return boolean
     */
    public function getNeeded()
    {
        return $this->needed;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Skill
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set base
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\Characteristic $base
     *
     * @return Skill
     */
    public function setBase(\Nilmanduil\RPGSheetBundle\Entity\Characteristic $base = null)
    {
        $this->base = $base;

        return $this;
    }

    /**
     * Get base
     *
     * @return \Nilmanduil\RPGSheetBundle\Entity\Characteristic
     */
    public function getBase()
    {
        return $this->base;
    }
}
