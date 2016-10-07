<?php

namespace Spell\GeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SpellGeneralBundle:Default:index.html.twig');
    }
}
