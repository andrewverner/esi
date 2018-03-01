<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 13.02.18
 * Time: 18:17
 */

namespace ESC\request\characters;

use ESC\request\Request;

class CharacterAssetsNamesPostRequest extends CharacterRequest
{
    public $type = Request::METHOD_POST;

    protected $url = '/characters/{character_id}/assets/names/';
    protected $responseType = self::RESPONSE_TYPE_RAW;

    public function __construct($characterId, array $ids)
    {
        parent::__construct($characterId);
        $this->data = json_encode($ids);
    }
}
