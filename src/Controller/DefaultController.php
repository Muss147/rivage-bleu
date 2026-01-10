<?php
// ./src/Controller/DefaultController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/flowbite')]
class DefaultController extends AbstractController
{
    #[Route('/', name: 'default_index')]
    public function index()
    {
        return $this->render('flowbite/index.html.twig', []);
    }

    #[Route('/', name: 'default_accordion')]
    public function accordion()
    {
        return $this->render('flowbite/accordion.html.twig', []);
    }

    #[Route('/', name: 'default_modal')]
    public function modal()
    {
        return $this->render('flowbite/modal.html.twig', []);
    }

    #[Route('/', name: 'default_collapse')]
    public function collapse()
    {
        return $this->render('flowbite/collapse.html.twig', []);
    }

    #[Route('/', name: 'default_speedDial')]
    public function speedDial()
    {
        return $this->render('flowbite/speed-dial.html.twig', []);
    }

    #[Route('/', name: 'default_drawer')]
    public function drawer()
    {
        return $this->render('flowbite/drawer.html.twig', []);   
    }

    #[Route('/', name: 'default_dropdown')]
    public function dropdown()
    {
        return $this->render('flowbite/dropdown.html.twig', []);
    }

    #[Route('/', name: 'default_popover')]
    public function popover()
    {
        return $this->render('flowbite/popover.html.twig', []);
    }

    #[Route('/', name: 'default_tabs')]
    public function tabs()
    {
        return $this->render('flowbite/tabs.html.twig', []);
    }

    #[Route('/', name: 'default_tooltip')]
    public function tooltip()
    {
        return $this->render('flowbite/tooltip.html.twig', []);
    }

    #[Route('/', name: 'default_inputCounter')]
    public function inputCounter()
    {
        return $this->render('flowbite/input-counter.html.twig', []);
    }

    #[Route('/', name: 'default_datepicker')]
    public function datepicker()
    {
        return $this->render('flowbite/datepicker.html.twig', []);
    }
}
