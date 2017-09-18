<?php

namespace ESC\response\characters;

use ESC\response\Response;

class CharacterResponse extends Response
{
    public $ancestryId;
    public $birthday;
    public $bloodlineId;
    public $corporationId;
    public $description;
    public $gender;
    public $name;
    public $raceId;

    public function __construct($data)
    {
        parent::__construct($data);
        $this->birthday = new \DateTime($this->birthday);
    }
}
