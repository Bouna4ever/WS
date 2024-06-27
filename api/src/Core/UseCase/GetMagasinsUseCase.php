<?php

namespace Api\Core\UseCase;

use Api\Core\Service\MagasinService;

class GetMagasinsUseCase
{
    private MagasinService $magasinService;
    public function __construct()
    {
        $this->magasinService = new MagasinService();
    }

    public function execute()
    {
        return $this->magasinService->getAllMagasins();
    }
}