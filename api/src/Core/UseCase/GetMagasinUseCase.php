<?php

namespace Api\Core\UseCase;

use Api\Core\Service\MagasinService;

class GetMagasinUseCase
{
    private MagasinService $magasinService;
    public function __construct()
    {
        $this->magasinService = new MagasinService();
    }

    public function execute($id )
    {
        return $this->magasinService->getMagasin($id);
    }
}