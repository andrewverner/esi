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
use ESC\request\eve\fw\EveFWCharactersLeaderBoardsGetRequest;
use ESC\request\eve\fw\EveFWCorporationsLeaderBoardsGetRequest;
use ESC\request\eve\fw\EveFWLeaderBoardsGetRequest;
use ESC\request\eve\fw\EveFWStatsGetRequest;
use ESC\request\eve\fw\EveFWSystemsGetRequest;
use ESC\request\eve\fw\EveFWWarsGetRequest;
use ESC\request\eve\incursions\EveIncursionsGetRequest;

//@todo Fleets Requests
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

    public function fwLeaderBoard()
    {
        return $this->esi->rest->call(new EveFWLeaderBoardsGetRequest());
    }

    public function fwCharactersLeaderBoard()
    {
        return $this->esi->rest->call(new EveFWCharactersLeaderBoardsGetRequest());
    }

    public function fwCorporationsLeaderBoard()
    {
        return $this->esi->rest->call(new EveFWCorporationsLeaderBoardsGetRequest());
    }

    public function fwStats()
    {
        return $this->esi->rest->call(new EveFWStatsGetRequest());
    }

    public function fwSystems()
    {
        return $this->esi->rest->call(new EveFWSystemsGetRequest());
    }

    public function fwWars()
    {
        return $this->esi->rest->call(new EveFWWarsGetRequest());
    }

    public function incursions()
    {
        return $this->esi->rest->call(new EveIncursionsGetRequest());
    }
}
