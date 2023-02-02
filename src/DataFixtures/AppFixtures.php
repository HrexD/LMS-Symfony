<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Product;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $category = new Category();
        $category->setName('Viande');
        $category->setSlug('viande');
        $manager->persist($category);

        for ($i = 1; $i < 10; $i++) {
            $product = new Product();
            $product->setName('Boeuf ' . $i);
            $product->setSlug('product-' . $i);
            $product->setDescription('Description ' . $i);
            $product->setPrice('10.00');
            $product->setImage('saussage.jpg');
            $product->setCategory($category);
            $manager->persist($product);
        }

        $category = new Category();
        $category->setName('Fruits');
        $category->setSlug('fruits');
        $manager->persist($category);

        for ($i = 1; $i < 10; $i++) {
            $product = new Product();
            $product->setName('Citron ' . $i);
            $product->setSlug('product-' . $i);
            $product->setDescription('Description ' . $i);
            $product->setPrice('7.00');
            $product->setImage('citron.jpg');
            $product->setCategory($category);
            $manager->persist($product);
        }
        $category = new Category();
        $category->setName('Légumes');
        $category->setSlug('legumes');
        $manager->persist($category);

        for ($i = 1; $i < 10; $i++) {
            $product = new Product();
            $product->setName('Topinambour ' . $i);
            $product->setSlug('product-' . $i);
            $product->setDescription('Description ' . $i);
            $product->setPrice('5.00');
            $product->setImage('topinambour.jpg');
            $product->setCategory($category);
            $manager->persist($product);
        }
        $category = new Category();
        $category->setName('Poissons');
        $category->setSlug('poissons');
        $manager->persist($category);

        for ($i = 1; $i < 10; $i++) {
            $product = new Product();
            $product->setName('Saumon ' . $i);
            $product->setSlug('product-' . $i);
            $product->setDescription('Description ' . $i);
            $product->setPrice('5.00');
            $product->setImage('saumon.jpg');
            $product->setCategory($category);
            $manager->persist($product);
        }

        $category = new Category();
        $category->setName('Boissons');
        $category->setSlug('boissons');
        $manager->persist($category);

        for ($i = 1; $i < 10; $i++) {
            $product = new Product();
            $product->setName('Sex On The Beach ' . $i);
            $product->setSlug('product-' . $i);
            $product->setDescription('Description ' . $i);
            $product->setPrice('15.00');
            $product->setImage('sex on the beach.jpg');
            $product->setCategory($category);
            $manager->persist($product);
        }

        $category = new Category();
        $category->setName('Fromages');
        $category->setSlug('fromages');
        $manager->persist($category);

        for ($i = 1; $i < 10; $i++) {
            $product = new Product();
            $product->setName('Camembert ' . $i);
            $product->setSlug('product-' . $i);
            $product->setDescription('Description ' . $i);
            $product->setPrice('5.00');
            $product->setImage('camembert.jpg');
            $product->setCategory($category);
            $manager->persist($product);
        }




       
        
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
