<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 01.03.18
 * Time: 15:33
 */

namespace ESC\request\corporations;

use ESC\request\Request;

class CorporationRequest extends Request
{
    public function __construct($corporationId = null)
    {
        if ($corporationId) {
            $this->url = str_replace('{corporation_id}', $corporationId, $this->url);
        }
    }
}
