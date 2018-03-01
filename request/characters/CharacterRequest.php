<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 01.03.18
 * Time: 18:27
 */

namespace ESC\request\characters;

use ESC\request\Request;

class CharacterRequest extends Request
{
    public function __construct($characterId = null)
    {
        if ($characterId) {
            $this->url = str_replace('{character_id}', $characterId, $this->url);
        }
    }
}
