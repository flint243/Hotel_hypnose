<?php
// src/Message/NewUserWelcomeEmail.php
namespace App\Message;

use App\Message\Base\AsyncMessage;

class NewUserWelcomeEmail extends AsyncMessage
{

private $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

}