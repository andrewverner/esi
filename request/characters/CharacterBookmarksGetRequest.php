<?php

namespace ESC\request\characters;

use ESC\core\sorter\ISorter;
use ESC\request\Request;
use ESC\response\struct\BookmarkStruct;

class CharacterBookmarksGetRequest extends Request
{
    public function __construct($characterId, ISorter $sorter = null)
    {
        $this->url = "/characters/{$characterId}/bookmarks/";
        $this->sorter = $sorter;
    }

    public function response($data)
    {
        return $this->responseList($data, BookmarkStruct::class);
    }
}
