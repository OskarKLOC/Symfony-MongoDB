<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Doctrine\Common\Collections\ArrayCollection;
use App\Document\ProductOptions;
use App\Document\ProductReview;

// Our primary class matching to the document that will be added to the collection with the same name in our database
#[MongoDB\Document]
class Product
{
    // The identifier provided by MongoDB, we will only read it when it is retrieved
    #[MongoDB\Id]
    private ?string $id = null;

    // An example of a string type property
    #[MongoDB\Field(type: "string")]
    private ?string $name = null;

    // An example of a boolean type property
    #[MongoDB\Field(type: "boolean")]
    private ?bool $active = null;

    // An example of a float type property
    #[MongoDB\Field(type: "float")]
    private ?float $price = null;

    // An example of a date type property
    #[MongoDB\Field(type: "date")]
    private ?\DateTime $createdAt = null;

    // An example of an embedded document
    #[MongoDB\EmbedOne(targetDocument: ProductOptions::class)]
    private ?ProductOptions $options = null;

    // An exemple of an embedded collection
    #[MongoDB\EmbedMany(targetDocument: ProductReview::class)]
    private ?ArrayCollection $reviews = null;

    public function __construct()
    {
        $this->options = new ProductOptions();
        $this->reviews = new ArrayCollection();
    }

    // The getters and setters for each of our properties
    public function getId(): ?string
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): Product
    {
        $this->name = $name;
        return $this;
    }

    public function isActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(?bool $active): Product
    {
        $this->active = $active;
        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): Product
    {
        $this->price = $price;
        return $this;
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTime $createdAt): Product
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getOptions(): ?ProductOptions
    {
        return $this->options;
    }

    public function setOptions(?ProductOptions $options): Product
    {
        $this->options = $options;
        return $this;
    }

    public function getReviews(): ?ArrayCollection
    {
        return $this->reviews;
    }

    public function setReviews(?ArrayCollection $reviews): Product
    {
        $this->reviews = $reviews;
        return $this;
    }

    public function addReview(?ProductReview $review): Product
    {
        $this->reviews->add($review);
        return $this;
    }

    public function removeReview(?ProductReview $review): Product
    {
        $this->reviews->removeElement($review);
        return $this;
    }
}
