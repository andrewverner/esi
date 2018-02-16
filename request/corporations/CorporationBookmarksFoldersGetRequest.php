<?php

namespace ESC\request\corporations;

use ESC\core\sorter\ISorter;
use ESC\request\Request;

class CorporationBookmarksFoldersGetRequest extends Request
{
    public function __construct($characterId, ISorter $sorter = null)
    {
        $this->url = "/corporations/{$characterId}/bookmarks/folders/";
        $this->sorter = $sorter;
    }
}
