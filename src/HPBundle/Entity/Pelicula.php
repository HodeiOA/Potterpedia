<?php
// src/HPBundle/Entity/Pelicula.php
namespace HPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity
* @ORM\Table(name="pelicula")
*/

class Pelicula
{
	/**
	* @ORM\Id
	* @ORM\Column(name="idPelicula", type="integer")
	* @ORM\GeneratedValue(strategy="AUTO")
	*/
	protected $idPelicula;

	/**
	* @ORM\Column(type="text")
	*/
	protected $titulo;

	/**
	* @ORM\Column(type="integer")
	*/
	protected $año;
	
	/**
	* @ORM\Column(type="text")
	*/
	protected $sinopsis;

	/**
	* @ORM\Column(type="text")
	*/
	protected $director;

	/**
    * @ORM\ManyToMany(targetEntity="Personaje", mappedBy="peliculas")
    */
     private $personajes;
}
?>
