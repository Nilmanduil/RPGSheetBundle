<?php

namespace Nilmanduil\RPGSheetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Money
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Nilmanduil\RPGSheetBundle\Entity\MoneyRepository")
 */
class Money
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
     * @ORM\ManyToOne(targetEntity="Nilmanduil\RPGSheetBundle\Entity\Game", inversedBy="devises")
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
     * @return Money
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
     * @return Money
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
