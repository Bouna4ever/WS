<?php

namespace Api\Core\ValueObject\Magasin;

use DomainException;

class MagasinAddress
{
    public function __construct(private string $magasinAddress)
    {
        if (!preg_match("/^[\p{L}_-]{1,100}$/", $magasinAddress)) {
            throw new DomainException("L'adresse est invalide");
        }
    }
}