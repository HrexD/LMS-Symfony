<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CategoryController extends AbstractController
{
    public function __construct(private CategoryRepository $categoryRepository)
    {
       
    }
 
    #[Route('/category/{slug}', name: 'category.detail')]
    public function detail(string $slug):Response
    {
        $category = $this->categoryRepository->findOneBy(['slug' => $slug]);
        $products = $this->categoryRepository->getProductsByCategory($category);
        return $this->render('category/detail.html.twig', [
            'category' => $category, 'products' => $products
        ]);
    }

    #[Route('/categories', name: 'categories')]
    public function index():Response
    {
       
        $categories = $this->categoryRepository->getCategory();
        return $this->render('category/index.html.twig', [
            'categories' => $categories, 
            
        ]);
    }

}