<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BadLocationController extends AbstractController
{
    /**
     * @Route("/badlocation", name="badlocation")
     */
    public function index()
    {
        return $this->render('badlocation.html.twig');
    }
}