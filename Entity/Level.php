<?php

namespace Nilmanduil\RPGSheetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Level
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Nilmanduil\RPGSheetBundle\Entity\LevelRepository")
 */
class Level
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
     * @ORM\Column(name="number", type="integer")
     */
    private $number;

    /**
     * @var integer
     *
     * @ORM\Column(name="expNeeded", type="integer")
     */
    private $expNeeded;
    
    /**
     * @var Game
     * 
     * @ORM\ManyToOne(targetEntity="Nilmanduil\RPGSheetBundle\Entity\Game", inversedBy="levels")
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
     * Set number
     *
     * @param integer $number
     *
     * @return Level
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set expNeeded
     *
     * @param integer $expNeeded
     *
     * @return Level
     */
    public function setExpNeeded($expNeeded)
    {
        $this->expNeeded = $expNeeded;

        return $this;
    }

    /**
     * Get expNeeded
     *
     * @return integer
     */
    public function getExpNeeded()
    {
        return $this->expNeeded;
    }

    /**
     * Set game
     *
     * @param \Nilmanduil\RPGSheetBundle\Entity\Game $game
     *
     * @return Level
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
