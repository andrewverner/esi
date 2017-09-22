<?php

namespace ESC\response\characters;

use ESC\response\Response;
use ESC\response\struct\CharacterJumpCloneStruct;

class CharacterJumpClonesResponse extends Response
{
    public $jumpClones;
    public $homeLocation;

    public function __construct($data)
    {
        parent::__construct($data);
        if (!is_null($this->jumpClones)) {
            foreach ($this->jumpClones as $key => $jumpClone) {
                unset($this->jumpClones[$key]);
                $this->jumpClones[] = new CharacterJumpCloneStruct($jumpClone);
            }
        }
    }
}
