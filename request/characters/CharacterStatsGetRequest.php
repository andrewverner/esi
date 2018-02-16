<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 16.02.18
 * Time: 14:17
 */

namespace ESC\request\characters;

use ESC\request\Request;

class CharacterStatsGetRequest extends Request
{
    public function __construct($characterId)
    {
        $this->url = "/characters/{$characterId}/stats/";
    }
}
