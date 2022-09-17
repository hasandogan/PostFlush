<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class routeController extends AbstractController
{
    #[Route('/index', name: 'create_product')]
    public function indexView()
    {
        return $this->render('index.html.twig');

    }

}
