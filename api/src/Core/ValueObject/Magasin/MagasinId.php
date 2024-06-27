<?php

namespace Api\Core\ValueObject\Magasin;

use DomainException;

class MagasinId
{
    public function __construct(private int $magasinId)
    {
        $isOutOfRange = filter_var(
            $magasinId,
            FILTER_VALIDATE_INT,
            array('options' => array('min_range' => 1, 'max_range' => 50000))
        ) === FALSE;
        if ($isOutOfRange) {
            throw new DomainException("L'id renseigné n'est pas valide");
        }
    }
}