<?php
namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class AdvertController extends Controller
{
    public function viewSlugAction($slug,$year,$_format)
    {
        return new Response(
            "On pourrait afficher l'annonce correspondant au slug '" . $slug . "', créée en " . $year . " et au format " . $_format . " . "
        );
    }

    public function viewAction($id)
    {
        return new Response("Affichage de l'annonce d'id : ". $id);
    }

    public function indexAction()
    {
        /*$content = $this
            ->get('templating')
            ->render('OCPlatformBundle:Advert:index.html.twig',array('nom'=>'winzou'))
        ;*/
        $url = $this->get('router')->generate(
            'oc_plateform_view',
            array('id'=> 5)
        );

        /*return new Response($content);*/
        return new Response("L'Url de l'annonce de l'id 5 est: " . $url);
    }
}
?>