<?php

namespace ESC\core;

use ESC\ESI;
use ESC\request\characters\CharacterAgentsResearchRequest;
use ESC\request\characters\CharacterBlueprintsRequest;
use ESC\request\characters\CharacterChatChannelsRequest;
use ESC\request\characters\CharacterCorporationHistoryRequest;
use ESC\request\characters\CharacterRequest;
use ESC\request\characters\CharactersNamesRequest;

class CharacterFacade implements ICharacterFacade
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

    public function setId($id) {
        $this->id = $id;
    }

    public function setToken($token) {
        $this->token = $token;
    }

    public function names($ids)
    {
        return $this->esi->rest->call(new CharactersNamesRequest($ids));
    }

    public function details()
    {
        return $this->esi->rest->call(new CharacterRequest($this->id));
    }

    public function agentsResearch()
    {
        return $this->esi->rest->authorizedCall(new CharacterAgentsResearchRequest($this->id), $this->token);
    }

    public function blueprints()
    {
        return $this->esi->rest->authorizedCall(new CharacterBlueprintsRequest($this->id), $this->token);
    }

    public function chatChannels()
    {
        return $this->esi->rest->authorizedCall(new CharacterChatChannelsRequest($this->id), $this->token);
    }

    public function corporationHistory()
    {
        return $this->esi->rest->call(new CharacterCorporationHistoryRequest($this->id));
    }
}
