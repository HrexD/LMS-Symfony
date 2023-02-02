<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductController extends AbstractController
{
    public function __construct(private ProductRepository $productRepository)
    {
       
    }
 
    #[Route('/product/{slug}', name: 'product.detail')]
    public function detail(string $slug):Response
    {
        $product = $this->productRepository->findOneBy(['slug' => $slug]);
        return $this->render('product/detail.html.twig', [
            'product' => $product
        ]);
    }

    #[Route('/products/page/{page}', name: 'products')]
    public function index(int $page):Response
    {
       
        $products = $this->productRepository->getProducts(($page - 1) * 12);
       // $count = $this->productRepository->countProducts();
        return $this->render('product/index.html.twig', [
            'page' => $page, "products" => $products
        ]);
    }

}