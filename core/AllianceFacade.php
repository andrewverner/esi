<?php

namespace ESC\core;

use ESC\ESI;
use ESC\request\alliance\AllianceCorporationsGetRequest;
use ESC\request\alliance\AllianceGetRequest;
use ESC\request\alliance\AllianceIconsGetRequest;
use ESC\request\alliance\Alliances;
use ESC\request\alliance\AlliancesGetRequest;
use ESC\request\alliance\AlliancesNamesGetRequest;

class AllianceFacade implements IAllianceFacade
{
    private $id;
    private $token;
    private $esi;

    public function __construct($id = null, $token = null)
    {
        $this->id = $id;
        $this->token = $token;
        $this->esi = ESI::app();
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setToken($token)
    {
        $this->token = $token;
    }

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
