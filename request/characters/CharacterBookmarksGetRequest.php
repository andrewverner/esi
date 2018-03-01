<?php

namespace ESC\request\characters;

use ESC\core\sorter\ISorter;
use ESC\response\struct\BookmarkStruct;

class CharacterBookmarksGetRequest extends CharacterRequest
{
    protected $url = '/characters/{character_id}/bookmarks/';
    protected $responseType = self::RESPONSE_TYPE_LIST;
    protected $responseInstanceType = BookmarkStruct::class;

    public function __construct($characterId, ISorter $sorter = null)
    {
        parent::__construct($characterId);
        $this->sorter = $sorter;
    }
}
