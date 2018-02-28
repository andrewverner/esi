<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 16:42
 */

namespace ESC\request\corporations;

use ESC\request\Request;

class CorporationsNamesGetRequest extends Request
{
    public function __construct(array $ids)
    {
        $this->url .= '/corporations/names/?corporation_ids=' . implode(',', $ids);
    }
}
