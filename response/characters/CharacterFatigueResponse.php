<?php

namespace ESC\response\characters;

use ESC\response\Response;

class CharacterFatigueResponse extends Response
{
    public $jumpFatigueExpireDate;
    public $lastJumpDate;
    public $lastUpdateDate;

    public function __construct($data)
    {
        parent::__construct($data);
        if (!is_null($this->jumpFatigueExpireDate)) {
            $this->jumpFatigueExpireDate = new \DateTime($this->jumpFatigueExpireDate);
        }

        if (!is_null($this->lastJumpDate)) {
            $this->lastJumpDate = new \DateTime($this->lastJumpDate);
        }

        if (!is_null($this->lastUpdateDate)) {
            $this->lastUpdateDate = new \DateTime($this->lastUpdateDate);
        }
    }
}
