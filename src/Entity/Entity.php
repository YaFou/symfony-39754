<?php

namespace App\Entity;

use Symfony\Component\Serializer\Annotation\Ignore;

class Entity
{
    private $firstName;
    private $lastName;

    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
    
    public function getName(): string
    {
        return sprintf('%s %s', $this->lastName, $this->firstName);
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }
}
