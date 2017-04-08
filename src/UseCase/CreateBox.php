<?php

namespace Krauza\UseCase;

use Krauza\Entity\User;
use Krauza\Factory\BoxFactory;
use Krauza\Policy\IdPolicy;
use Krauza\Repository\BoxRepository;

class CreateBox
{
    private $boxRepository;
    private $idPolicy;

    public function __construct(BoxRepository $boxRepository, IdPolicy $idPolicy)
    {
        $this->boxRepository = $boxRepository;
        $this->idPolicy = $idPolicy;
    }

    public function add(array $data, User $user)
    {
        $card = BoxFactory::createBox($data, $this->idPolicy);
        $this->boxRepository->add($card, $user);
    }
}