<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 17:33
 */

namespace ESC\core;

use ESC\request\eve\dogma\EveDogmaAttributeGetRequest;
use ESC\request\eve\dogma\EveDogmaAttributesGetRequest;
use ESC\request\eve\dogma\EveDogmaEffectGetRequest;
use ESC\request\eve\dogma\EveDogmaEffectsGetRequest;

class EVEFacade extends CommonFacade
{
    public function dogmaAttributes()
    {
        return $this->esi->rest->call(new EveDogmaAttributesGetRequest());
    }

    public function dogmaAttribute($attributeId)
    {
        return $this->esi->rest->call(new EveDogmaAttributeGetRequest($attributeId));
    }

    public function dogmaEffects()
    {
        return $this->esi->rest->call(new EveDogmaEffectsGetRequest());
    }

    public function dogmaEffect($effectId)
    {
        return $this->esi->rest->call(new EveDogmaEffectGetRequest($effectId));
    }
}
