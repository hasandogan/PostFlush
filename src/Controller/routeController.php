<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mercure\HubInterface;
use Symfony\Component\Routing\Annotation\Route;

class routeController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function indexView()
    {
        return $this->render('index.html.twig');

    }


}
