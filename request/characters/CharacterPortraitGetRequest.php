<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 16.02.18
 * Time: 14:00
 */

namespace ESC\request\characters;

use ESC\request\Request;

class CharacterPortraitGetRequest extends Request
{
    public function __construct($characterId)
    {
        $this->url = "/characters/{$characterId}/portrait/";
    }
}
