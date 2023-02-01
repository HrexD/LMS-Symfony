<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 1; $i < 50; $i++) {
            $product = new Product();
            $product->setName('Saucisse ' . $i);
            $product->setSlug('product-' . $i);
            $product->setDescription('Description ' . $i);
            $product->setPrice('10.00');
            $product->setImage('saussage.jpg');
            $manager->persist($product);
        }
        
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
