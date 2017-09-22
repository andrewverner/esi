<?php

namespace ESC\request\characters;

use ESC\request\Request;
use ESC\response\struct\AssetStruct;

class CharacterAssetsRequest extends Request
{
    public $type = Request::METHOD_GET;

    public function __construct($characterId)
    {
        $this->url = "/characters/{$characterId}/assets/";
    }

    public function response($data)
    {
        if (empty($data)) {
            return null;
        }

        $list = [];
        foreach ($data as $asset) {
            $list[] = new AssetStruct($asset);
        }

        return $list;
    }
}
