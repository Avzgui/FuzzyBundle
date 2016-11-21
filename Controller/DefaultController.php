<?php

namespace Avzgui\FuzzyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FuzzyBundle:Default:index.html.twig');
    }
}
