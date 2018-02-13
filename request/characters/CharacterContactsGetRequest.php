<?php

namespace ESC\request\characters;

use ESC\request\Request;

class CharacterContactsGetRequest extends Request
{
    public function __construct($characterId)
    {
        $this->url = "/characters/{$characterId}/contacts/";
    }

    public function response($data)
    {
        return $this->responseList($data, 'CharacterContactStruct');
    }
}
