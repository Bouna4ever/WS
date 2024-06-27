<?php

namespace Api\Core\ValueObject\Magasin;

use DomainException;

class MagasinName
{
    public function __construct(private string $magasinName)
    {
        if (!preg_match("/^[\p{L}_-]{1,100}$/", $magasinName)) {
            throw new DomainException("Le nom est invalide");
        }
    }
}