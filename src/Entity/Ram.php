<?php

namespace App\Entity;

use App\Repository\RamRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RamRepository::class)]
class Ram
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]

    private $capacite;
    private $typeramid;
    private $last_update;
    private $lastdatetime;


    /**
     * Get the value of id
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(?int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of capacite
     */
    public function getCapacite()
    {
        return $this->capacite;
    }

    /**
     * Set the value of capacite
     */
    public function setCapacite($capacite)
    {
        $this->capacite = $capacite;

        return $this;
    }

    /**
     * Get the value of typeramid
     */
    public function getTyperamid()
    {
        return $this->typeramid;
    }

    /**
     * Set the value of typeramid
     */
    public function setTyperamid($typeramid)
    {
        $this->typeramid = $typeramid;

        return $this;
    }

    /**
     * Get the value of last_update
     */
    public function getLastUpdate()
    {
        return $this->last_update;
    }

    /**
     * Set the value of last_update
     */
    public function setLastUpdate($last_update)
    {
        $this->last_update = $last_update;

        return $this;
    }

    /**
     * Get the value of lastdatetime
     */
    public function getLastdatetime()
    {
        return $this->lastdatetime;
    }

    /**
     * Set the value of lastdatetime
     */
    public function setLastdatetime($lastdatetime)
    {
        $this->lastdatetime = $lastdatetime;

        return $this;
    }
}
