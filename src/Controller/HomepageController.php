<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\ProductRepository;

class HomepageController extends AbstractController
{
    public function __construct(private ProductRepository $ProductRepository)
    {
        
    }
    #[Route('/', name: 'homepage')]
    public function index():Response
    {

        return $this->render('homepage/index.html.twig', [
        ]);
        
    }

}