<?php

namespace Api\Core\UseCase;

use Api\Core\Service\MagasinService;

class DeleteMagasinUseCase
{
    private MagasinService $magasinService;
    public function __construct()
    {
        $this->magasinService = new MagasinService();
    }

    public function execute($id)
    {
        return $this->magasinService->deleteMagasin($id);
    }
}