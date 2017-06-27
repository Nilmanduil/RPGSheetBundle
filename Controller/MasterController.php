<?php

namespace Nilmanduil\RPGSheetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MasterController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('NilmanduilRPGSheetBundle:Default:index.html.twig', array('name' => $name));
    }
}
