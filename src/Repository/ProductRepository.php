<?php

namespace App\Repository;

use App\Document\Product;
use Doctrine\Bundle\MongoDBBundle\ManagerRegistry;
use Doctrine\Bundle\MongoDBBundle\Repository\ServiceDocumentRepository;

class ProductRepository extends ServiceDocumentRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }
    
    // Retrieve all documents from the collection
    public function findAllProducts(): ?array
    {
        return $this->findAll();
    }

    // Retrieve one document by id from the collection
    public function findProductById(string $id): ?Product
    {
        return $this->findOneBy(['id' => $id]);
    }

    // Add a document to the collection
    public function addProduct(Product $product)
    {
        $this->getDocumentManager()->persist($product);
        $this->getDocumentManager()->flush();
    }
}