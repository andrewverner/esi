<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 13.02.18
 * Time: 18:12
 */

namespace ESC\request\alliances;

use ESC\request\Request;

class AllianceIconsGetRequest extends Request
{
    public function __construct($id)
    {
        $this->url = "/alliances/{$id}/icons/";
    }
}
