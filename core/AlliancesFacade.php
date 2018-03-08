<?php

namespace ESC\core;

use ESC\request\alliances\AllianceCorporationsGetRequest;
use ESC\request\alliances\AllianceGetRequest;
use ESC\request\alliances\AllianceIconsGetRequest;
use ESC\request\alliances\AlliancesGetRequest;
use ESC\request\alliances\AlliancesNamesGetRequest;

class AlliancesFacade extends CommonFacade implements IAlliancesFacade
{
    public function alliances()
    {
        return $this->esi->rest->call(new AlliancesGetRequest());
    }

    public function names(array $ids)
    {
        return $this->esi->rest->call(new AlliancesNamesGetRequest($ids));
    }

    public function details($id = null)
    {
        return $this->esi->rest->call(new AllianceGetRequest($id ?: $this->id));
    }

    public function corporations($id = null)
    {
        return $this->esi->rest->call(new AllianceCorporationsGetRequest($id ?: $this->id));
    }

    public function icons($id = null)
    {
        return $this->esi->rest->call(new AllianceIconsGetRequest($id ?: $this->id));
    }
}
