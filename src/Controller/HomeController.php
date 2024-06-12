<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route(
    name: 'app_home_'
)]
final class HomeController extends AbstractController
{
    #[Route(
        path: '/',
        name: 'index',
        methods: ['GET'],
    )]
    public function index(): Response
    {
        return $this->render('pages/home.html.twig');
    }
}