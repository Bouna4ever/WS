<?php
namespace Api\Core\Controller;

use Api\Core\UseCase\GetMagasinsUseCase;
use Api\Core\UseCase\CreateMagasinUseCase;
use Api\Core\UseCase\GetMagasinUseCase;
use Api\Core\UseCase\UpdateMagasinUseCase;
use Api\Core\UseCase\DeleteMagasinUseCase;

class MagasinController
{
    private GetMagasinsUseCase $getMagasinsUseCase;
    private CreateMagasinUseCase $createMagasinUseCase;
    private GetMagasinUseCase $getMagasinUseCase;
    private UpdateMagasinUseCase $updateMagasinUseCase;
    private DeleteMagasinUseCase $deleteMagasinUseCase;
    public function __construct()
    {
        $this->getMagasinsUseCase = new GetMagasinsUseCase();
        $this->createMagasinUseCase = new CreateMagasinUseCase();
        $this->getMagasinUseCase = new GetMagasinUseCase();
        $this->updateMagasinUseCase = new UpdateMagasinUseCase();
        $this->deleteMagasinUseCase = new DeleteMagasinUseCase();
    }

    public function listMagasins() : void
    {
        $magasins = $this->getMagasinsUseCase->execute();
        echo json_encode($magasins);
    }

    public function createMagasin($data)
    {
        // Logique pour créer un magasin
        $magasin = $this->createMagasinUseCase->execute( $data);
        echo json_encode($magasin);
    }

    public function getMagasin($id)
    {
        // Logique pour obtenir un magasin par ID
        $magasin = $this->getMagasinUseCase->execute($id);
        echo json_encode($magasin);
    }

    public function updateMagasin($id, $data)
    {
        // Logique pour mettre à jour un magasin par ID
        $magasin = $this->updateMagasinUseCase->execute($id, $data);
        echo json_encode($magasin);
    }

    public function deleteMagasin($id)
    {
        // Logique pour supprimer un magasin par ID
        $magasin = $this->deleteMagasinUseCase->execute($id);
        echo json_encode($magasin);
    }
}

