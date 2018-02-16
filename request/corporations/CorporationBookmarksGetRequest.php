<?php

namespace ESC\request\corporations;

use ESC\core\sorter\ISorter;
use ESC\request\Request;
use ESC\response\struct\BookmarkStruct;

class CorporationBookmarksGetRequest extends Request
{
    public function __construct($characterId, ISorter $sorter = null)
    {
        $this->url = "/corporations/{$characterId}/bookmarks/";
        $this->sorter = $sorter;
    }

    public function response($data)
    {
        return $this->responseList($data, BookmarkStruct::class);
    }
}
