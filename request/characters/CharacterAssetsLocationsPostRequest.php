<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 13.02.18
 * Time: 18:17
 */

namespace ESC\request\characters;

use ESC\request\Request;

class CharacterAssetsLocationsPostRequest extends Request
{
    public $type = Request::METHOD_POST;

    public function __construct($id, array $ids)
    {
        $this->url = "/characters/{$id}/assets/locations/";
        $this->data = [
            'item_ids' => implode(',', $ids)
        ];
    }
}
