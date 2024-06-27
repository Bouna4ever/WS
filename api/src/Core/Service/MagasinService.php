<?php
namespace Api\Core\Service;

use Api\Core\Repository\MagasinRepository;

class MagasinService
{
    private $magasinRepository;

    public function __construct()
    {
        $this->magasinRepository = new MagasinRepository();
    }

    public function getAllMagasins()
    {
        return $this->magasinRepository->findAll();
    }
    
    public function createMagasin($data) 
    {
        return $this->magasinRepository->createMagasin($data);
    }

    public function getMagasin($id)
    {
        return $this->magasinRepository->findOne($id);
    }
    
    public function updateMagasin($id, $data)
    {
        return $this->magasinRepository->updateOne($id, $data);
    }
    
    public function deleteMagasin($id)
    {
        return $this->magasinRepository->deleteOne($id);
    }
}