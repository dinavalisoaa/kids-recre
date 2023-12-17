<?php

namespace App\Entity;

use App\Repository\LaptopRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LaptopRepository::class)]
class Laptop
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]

    private ?string $name = null;


   protected $marqueid;
    private $ramid ;
    private ?int $disquedurid = null;
    private ?int $processeurid = null;
    private ?int $ecranid = null;
    private ?string $reference = null;
    private ?float $prix = null;
    private ?float $prixvente = null;
    private ?string $description = null;
    private ?int $users_id = null;


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
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

   /**
    * Get the value of marqueid
    */
   public function getMarqueid()
   {
      return $this->marqueid;
   }

   /**
    * Set the value of marqueid
    */
   public function setMarqueid($marqueid): self
   {
      $this->marqueid = $marqueid;

      return $this;
   }

    /**
     * Get the value of ramid
     */
    public function getRamid()
    {
        return $this->ramid;
    }

    /**
     * Set the value of ramid
     */
    public function setRamid($ramid): self
    {
        $this->ramid = $ramid;

        return $this;
    }

    /**
     * Get the value of disquedurid
     */
    public function getDisquedurid(): ?int
    {
        return $this->disquedurid;
    }

    /**
     * Set the value of disquedurid
     */
    public function setDisquedurid(?int $disquedurid): self
    {
        $this->disquedurid = $disquedurid;

        return $this;
    }

    /**
     * Get the value of processeurid
     */
    public function getProcesseurid(): ?int
    {
        return $this->processeurid;
    }

    /**
     * Set the value of processeurid
     */
    public function setProcesseurid(?int $processeurid): self
    {
        $this->processeurid = $processeurid;

        return $this;
    }

    /**
     * Get the value of ecranid
     */
    public function getEcranid(): ?int
    {
        return $this->ecranid;
    }

    /**
     * Set the value of ecranid
     */
    public function setEcranid(?int $ecranid): self
    {
        $this->ecranid = $ecranid;

        return $this;
    }

    /**
     * Get the value of reference
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }

    /**
     * Set the value of reference
     */
    public function setReference(?string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get the value of prix
     */
    public function getPrix(): ?float
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     */
    public function setPrix(?float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get the value of prixvente
     */
    public function getPrixvente(): ?float
    {
        return $this->prixvente;
    }

    /**
     * Set the value of prixvente
     */
    public function setPrixvente(?float $prixvente): self
    {
        $this->prixvente = $prixvente;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of users_id
     */
    public function getUsersId(): ?int
    {
        return $this->users_id;
    }

    /**
     * Set the value of users_id
     */
    public function setUsersId(?int $users_id): self
    {
        $this->users_id = $users_id;

        return $this;
    }
}
