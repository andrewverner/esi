<?php

namespace ESC\request\characters;

use ESC\request\Request;
use ESC\response\struct\BookmarkStruct;

class CharacterBookmarksRequest extends Request
{
    public $type = Request::METHOD_GET;

    public function __construct($characterId)
    {
        $this->url = "/characters/{$characterId}/bookmarks/";
    }

    public function response($data)
    {
        if (empty($data)) {
            return null;
        }

        $list = [];
        foreach ($data as $bookmark) {
            $list[] = new BookmarkStruct($bookmark);
        }

        return $list;
    }
}
