<?php
// src/Message/AsyncMessage.php
namespace App\Message\Base;

# use App\Entity\User;

class AsyncMessage
{

private $id;

    public function __construct(int $id )
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

}