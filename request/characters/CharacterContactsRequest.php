<?php

namespace ESC\request\characters;

use ESC\request\Request;

class CharacterContactsRequest extends Request
{
    public $type = Request::METHOD_GET;

    public function __construct($characterId)
    {
        $this->url = "/characters/{$characterId}/contacts/";
    }

    public function response($data)
    {
        return $this->responseList($data, 'CharacterContactStruct');
    }
}
