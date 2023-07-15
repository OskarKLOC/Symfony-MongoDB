<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

// A secondary class that is embedded in an array in our primary class
#[MongoDB\EmbeddedDocument]
class ProductReview
{
    // An example of a string type property
    #[MongoDB\Field(type: "string")]
    private ?string $author = null;

    // An example of a string type property
    #[MongoDB\Field(type: "string")]
    private ?string $content = null;

    // The getters and setters for each of our properties
    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(?string $author): ProductReview
    {
        $this->author = $author;
        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): ProductReview
    {
        $this->content = $content;
        return $this;
    }
}
