<?php

namespace ESC\request\characters;

use ESC\core\sorter\ISorter;

class CharacterBookmarksFoldersGetRequest extends CharacterRequest
{
    protected $url = '/characters/{character_id}/bookmarks/folders/';
    protected $responseType = self::RESPONSE_TYPE_RAW;

    public function __construct($characterId, ISorter $sorter = null)
    {
        parent::__construct($characterId);
        $this->sorter = $sorter;
    }
}
