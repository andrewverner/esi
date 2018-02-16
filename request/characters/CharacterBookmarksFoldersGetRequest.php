<?php

namespace ESC\request\characters;

use ESC\core\sorter\ISorter;
use ESC\request\Request;
use ESC\response\struct\BookmarkStruct;

class CharacterBookmarksFoldersGetRequest extends Request
{
    public function __construct($characterId, ISorter $sorter = null)
    {
        $this->url = "/characters/{$characterId}/bookmarks/folders/";
        $this->sorter = $sorter;
    }
}
