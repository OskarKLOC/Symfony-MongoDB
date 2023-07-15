<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

// A secondary class that is embedded in our primary class
#[MongoDB\EmbeddedDocument]
class ProductOptions
{
    // An example of a string type property
    #[MongoDB\Field(type: "string")]
    private ?string $color = null;

    // An example of a integer type property
    #[MongoDB\Field(type: "integer")]
    private ?int $size = null;

    // The getters and setters for each of our properties
    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): ProductOptions
    {
        $this->color = $color;
        return $this;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function setSize(int $size): ProductOptions
    {
        $this->size = $size;
        return $this;
    }
}
