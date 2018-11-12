<?php
// src/HPBundle/Controller/HPController.php
namespace HPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HPController extends Controller
{
	public function listCasasAction()
	{

		$casas = $this->get('doctrine')->getManager()->getRepository('HPBundle:Casa')->getCasas();

		return $this->render('HPBundle:Casa:listCasa.html.twig', array('casas' => $casas));
	}

	public function showCasaAction($id)
	{
		$casa = $this->get('doctrine')->getManager()->getRepository('HPBundle:Casa')->find($id);
		
		if (!$casa) 
		{
			throw $this->createNotFoundException('No se ha encontrado la casa.');
		}

		/*$personajes = $this->get('doctrine')->getManager()->getRepository('BlogBundle:Comment')->getCommentsForPost($post->getId());

		return $this->render('BlogBundle:Blog:show.html.twig', array('post' => $post, 'comments' => $comments));
		*/
		return $this->render('HPBundle:Casa:showCasa.html.twig', array('casa' => $casa));
	}

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
