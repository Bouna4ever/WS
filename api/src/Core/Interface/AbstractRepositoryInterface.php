<?php
namespace Api\Core\Interface;

interface AbstractRepositoryInterface
{
    public function findAll();

    public function createMagasin($data);

    public function findOne($id);

    public function updateOne($id, $data);

    public function deleteOne($id);
}