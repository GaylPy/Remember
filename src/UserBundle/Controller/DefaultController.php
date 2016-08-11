<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use InformationBundle\Entity\Category;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $repo = $em->getRepository('InformationBundle\Entity\Category');
        $vegetables = $repo->findOneByLabelCategory('Vegetables');

        $salad = $repo->findOneByLabelCategory('Carrots');

        $repo->moveUp($salad, 1);



        return $this->render('::index.html.twig');
    }
}
