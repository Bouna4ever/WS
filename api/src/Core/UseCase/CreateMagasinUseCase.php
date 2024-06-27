<?php

namespace Api\Core\UseCase;

use Api\Core\Service\MagasinService;

class CreateMagasinUseCase
{
    private MagasinService $magasinService;
    public function __construct()
    {
        $this->magasinService = new MagasinService();
    }

    public function execute($data)
    {
        return $this->magasinService->createMagasin($data);
    }
}