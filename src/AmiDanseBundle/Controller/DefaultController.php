<?php

namespace AmiDanseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AmiDanseBundle:Default:index.html.twig');
    }
}
