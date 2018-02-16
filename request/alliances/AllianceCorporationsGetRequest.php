<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 13.02.18
 * Time: 17:53
 */

namespace ESC\request\alliances;

use ESC\request\Request;

class AllianceCorporationsGetRequest extends Request
{
    public function __construct($id)
    {
        $this->url = "/alliances/{$id}/corporations/";
    }
}
