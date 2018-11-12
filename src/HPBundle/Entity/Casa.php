<?php

namespace BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * BlogBundle\Entity\Casa
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="BlogBundle\Entity\CasaRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Casa
{
    /**
     * @ORM\Column(name="idCasa", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idCasa;

    /**
     * @ORM\Column(type="string")
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", options={"length": 1000})
     */
    private $descripcion;

    /**
     * @ORM\Column(type="string")
     */
    private $animal;

    /**
     * @ORM\Column(type="string")
     */
    private $fantasma;

    /**
     * @ORM\Column(type="string")
     */
    private $creador;

     /**
     * Image path
     *
     * @ORM\Column(type="text", length=255, nullable=false)
     */
    private $path;

    /**
     * Get idCasa
     *
     * @return integer
     */

    /**
     * @ORM\OneToMany(targetEntity="Personaje", mappedBy="casa")
     */
    private $personajes;

    public function __construct()
    {
        $this->personajes = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->getNombre();
    }

    public function getIdCasa()
    {
        return $this->idCasa;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Casa
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Casa
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set animal
     *
     * @param string $animal
     *
     * @return Casa
     */
    public function setAnimal($animal)
    {
        $this->animal = $animal;

        return $this;
    }

    /**
     * Get animal
     *
     * @return string
     */
    public function getAnimal()
    {
        return $this->animal;
    }

    /**
     * Set fantasma
     *
     * @param string $fantasma
     *
     * @return Casa
     */
    public function setFantasma($fantasma)
    {
        $this->fantasma = $fantasma;

        return $this;
    }

    /**
     * Get fantasma
     *
     * @return string
     */
    public function getFantasma()
    {
        return $this->fantasma;
    }

    /**
     * Set creador
     *
     * @param string $creador
     *
     * @return Casa
     */
    public function setCreador($creador)
    {
        $this->creador = $creador;

        return $this;
    }

    /**
     * Get creador
     *
     * @return string
     */
    public function getCreador()
    {
        return $this->creador;
    }

    /**
     * Set path
     *
     * @param string $path
     *
     * @return Casa
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Add personaje
     *
     * @param \BlogBundle\Entity\Personaje $personaje
     *
     * @return Casa
     */
    public function addPersonaje(\BlogBundle\Entity\Personaje $personaje)
    {
        $this->personajes[] = $personaje;

        return $this;
    }

    /**
     * Remove personaje
     *
     * @param \BlogBundle\Entity\Personaje $personaje
     */
    public function removePersonaje(\BlogBundle\Entity\Personaje $personaje)
    {
        $this->personajes->removeElement($personaje);
    }

    /**
     * Get personajes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPersonajes()
    {
        return $this->personajes;
    }
}
