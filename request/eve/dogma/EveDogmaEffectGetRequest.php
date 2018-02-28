<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 17:45
 */

namespace ESC\request\eve\dogma;

use ESC\request\Request;
use ESC\response\eve\dogma\EveDogmaEffectResponse;

class EveDogmaEffectGetRequest extends Request
{
    public function __construct($effectId)
    {
        $this->url = "/dogma/effects/{$effectId}/";
    }

    public function response($data)
    {
        return new EveDogmaEffectResponse($data);
    }
}
