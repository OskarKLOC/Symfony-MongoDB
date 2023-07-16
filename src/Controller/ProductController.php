<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ODM\MongoDB\DocumentManager;
use App\Document\Product;
use App\Document\ProductOptions;
use App\Document\ProductReview;
use App\Repository\ProductRepository;

class ProductController extends AbstractController
{
    // A default route for our products
    #[Route('/product', name: 'app_product')]
    public function index(DocumentManager $dm): Response
    {
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }

    // A route to test our document without a repository
    #[Route('/product_add_without_repository', name: 'app_product_add_without_repository')]
    public function addWithoutRepository(DocumentManager $dm): Response
    {
        // We generate random values for the product and options
        $name = 'Product ' . rand(1000, 9999);
        $active = (bool) rand(0, 1);
        $price = rand(10, 10000) / 15.0;
        $color = 'Color ' . rand(1, 10);
        $size = rand(1, 5);
        $createdAt = new \DateTime();
        
        // We create an instance of Product and one of Options and set theirs properties
        $options = new ProductOptions();
        $options->setColor($color);
        $options->setSize($size);
        
        $product = new Product();
        $product->setName($name);
        $product->setActive($active);
        $product->setPrice($price);
        $product->setCreatedAt($createdAt);
        $product->setOptions($options);

        // We generate random reviews
        for ($i = 0; $i < 3; $i++) {
            $author = 'Author ' . ($i + 1) * rand(10, 99);
            $content = 'Review content ' . ($i + 1);

            $review = new ProductReview();
            $review->setAuthor($author);
            $review->setContent($content);

            $product->addReview($review);
        }

        // We save our new document in the database
        $dm->persist($product);
        $dm->flush();

        // We retrieve all the documents from the collection to later display them
        $products = $dm->getRepository(Product::class)->findAll();
        
        // We display the results
        return $this->render('product/add_without_form.html.twig', [
            'step_title' => 'Etape 1 - Premier Document sans Repository',
            'step_description' => 'Ajout et lecture de documents dans une collection en base de données pour contrôler la mise en place correcte de nos Documents dans Symfony sans utiliser de Repository à ce stade',
            'products' => $products,
        ]);
    }

    // A route to test our document without a repository
    #[Route('/product_add_with_repository', name: 'app_product_add_with_repository')]
    public function addWithRepository(ProductRepository $productRepository): Response
    {
        // We generate random values for the product and options
        $name = 'Product ' . rand(1000, 9999);
        $active = (bool) rand(0, 1);
        $price = rand(10, 10000) / 15.0;
        $color = 'Color ' . rand(1, 10);
        $size = rand(1, 5);
        $createdAt = new \DateTime();
        
        // We create an instance of Product and one of Options and set theirs properties
        $options = new ProductOptions();
        $options->setColor($color);
        $options->setSize($size);
        
        $product = new Product();
        $product->setName($name);
        $product->setActive($active);
        $product->setPrice($price);
        $product->setCreatedAt($createdAt);
        $product->setOptions($options);

        // We generate random reviews
        for ($i = 0; $i < 3; $i++) {
            $author = 'Author ' . ($i + 1) * rand(10, 99);
            $content = 'Review content ' . ($i + 1);

            $review = new ProductReview();
            $review->setAuthor($author);
            $review->setContent($content);

            $product->addReview($review);
        }

        // We save our new document in the database
        $productRepository->addProduct($product);

        // We retrieve all the documents from the collection to later display them
        $products = $productRepository->findAllProducts();
        
        // We display the results
        return $this->render('product/add_without_form.html.twig', [
            'step_title' => 'Etape 2 - Document avec Repository',
            'step_description' => 'Ajout et lecture de documents dans une collection en base de données pour contrôler la mise en place correcte de nos Documents dans Symfony avec utilisation d\'un Repository dédié',
            'products' => $products,
        ]);
    }
}
