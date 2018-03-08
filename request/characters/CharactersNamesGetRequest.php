<?php

namespace ESC\request\characters;

class CharactersNamesGetRequest extends CharacterRequest
{
    protected $url = '/characters/names/';
    protected $responseType = self::RESPONSE_TYPE_RAW;

    public function __construct(array $ids)
    {
        $this->url .= '?character_ids=' . implode(',', $ids);
    }
}
