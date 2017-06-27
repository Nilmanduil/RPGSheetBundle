<?php

namespace Nilmanduil\RPGSheetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Race
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Nilmanduil\RPGSheetBundle\Entity\RaceRepository")
 */
class Race
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
     * @ORM\Column(name="description", type="string", length=3000)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="modifiers", type="string", length=3000)
     */
    private $modifiers;
    
    /**
     * @var Game
     * 
     * @ORM\ManyToOne(targetEntity="Nilmanduil\RPGSheetBundle\Entity\Game", inversedBy="races")
     * @ORM\JoinColumn(nullable=false)
     */
    private $game;


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
     * @return Race
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
     * Set description
     *
     * @param string $description
     *
     * @return Race
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
     * Set modifiers
     *
     * @param string $modifiers
     *
     * @return Race
     */
    public function setModifiers($modifiers)
    {
        $this->modifiers = $modifiers;

        return $this;
    }

    /**
     * Get modifiers
     *
     * @return string
     */
    public function getModifiers()
    {
        return $this->modifiers;
    }

    /**
     * Set game
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\Game $game
     *
     * @return Race
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
}
