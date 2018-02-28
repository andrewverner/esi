<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 17:37
 */

namespace ESC\request\eve\dogma;

use ESC\request\Request;
use ESC\response\eve\dogma\EveDogmaAttributeResponse;

class EveDogmaAttributeGetRequest extends Request
{
    public function __construct($attributeId)
    {
        $this->url = "/dogma/attributes/{$attributeId}/";
    }

    public function response($data)
    {
        return new EveDogmaAttributeResponse($data);
    }
}
