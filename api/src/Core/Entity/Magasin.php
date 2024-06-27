<?php
namespace Api\Entity;

use Api\Core\ValueObject\Magasin\MagasinId;
use Api\Core\ValueObject\Magasin\MagasinName;
use Api\Core\ValueObject\Magasin\MagasinAddress;
use JsonSerializable;


class Magasin implements JsonSerializable
{
    public function __construct(
        private MagasinId $id,
        private MagasinName $name,
        private MagasinAddress $address
    )
    {}

    public function getId(): MagasinId
    {
        return $this->id;
    }

    public function getName(): MagasinName
    {
        return $this->name;
    }

    public function getAddress(): MagasinAddress
    {
        return $this->address;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "adresse" => $this->address,
        ];
    }
}