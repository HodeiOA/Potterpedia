<?php
// src/HPBundle/Controller/HPController.php
namespace HPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HPController extends Controller
{

	public function listPeliculasAction()
	{
		$peliculas = $this->get('doctrine')->getManager()->createQuery('SELECT p FROM HPBundle:Pelicula p')->execute();

		return $this->render('HPBundle:Pelicula:list.html.twig', array('peliculas' => $peliculas));
	}

	public function showPeliculasAction($id)
	{
		$peliculas = $this->get('doctrine')->getManager()->getRepository('HPBundle:Pelicula')->find($idPelicula);
		if (!$peliculas)
		{
			// cause the 404 page not found to be displayed
			throw $this->createNotFoundException();
		}
		
		return $this->render('HPBundle:Pelicula:show.html.twig', array('pelicula' => $pelicula));
	}
}
?>
