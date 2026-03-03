<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class FrontController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home(): Response
    {
        return $this->render('home.html.twig');
    }

    #[Route('/presentation', name: 'presentation')]
    public function presentation(): Response
    {
        return $this->render('presentation/index.html.twig');
    }

    #[Route('/flowbite', name: 'flowbite')]
    public function flowbite(): Response
    {
        return $this->render('flowbite/index.html.twig');
    }
}
