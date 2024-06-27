<?php

namespace Api\Core\UseCase;

use Api\Core\Service\MagasinService;

class UpdateMagasinUseCase
{
    private MagasinService $magasinService;
    public function __construct()
    {
        $this->magasinService = new MagasinService();
    }

    public function execute($id, $data)
    {
        return $this->magasinService->updateMagasin($id, $data);
    }
}