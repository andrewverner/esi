<?php

namespace ESC\core;

use ESC\core\sorter\ISorter;
use ESC\ESI;
use ESC\request\characters\CharacterAgentsResearchGetRequest;
use ESC\request\characters\CharacterAssetsGetRequest;
use ESC\request\characters\CharacterAssetsLocationsPostRequest;
use ESC\request\characters\CharacterBlueprintsGetRequest;
use ESC\request\characters\CharacterBookmarksGetRequest;
use ESC\request\characters\CharacterCalendarGetRequest;
use ESC\request\characters\CharacterChatChannelsGetRequest;
use ESC\request\characters\CharacterContactsNotificationsGetRequest;
use ESC\request\characters\CharacterCorporationHistoryGetRequest;
use ESC\request\characters\CharacterFatigueGetRequest;
use ESC\request\characters\CharacterMedalsGetRequest;
use ESC\request\characters\CharacterNotificationsGetRequest;
use ESC\request\characters\CharacterGetRequest;
use ESC\request\characters\CharacterRolesGetRequest;
use ESC\request\characters\CharactersNamesGetRequest;
use ESC\request\characters\CharacterStandingsGetRequest;

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

    public function names(array $ids)
    {
        return $this->esi->rest->call(new CharactersNamesGetRequest($ids));
    }

    public function details($id = null)
    {
        $id = $id ?: $this->id;
        return $this->esi->rest->call(new CharacterGetRequest($id));
    }

    public function agentsResearch()
    {
        return $this->esi->rest->authorizedCall(new CharacterAgentsResearchGetRequest($this->id), $this->token);
    }

    public function blueprints(ISorter $sorter = null)
    {
        return $this->esi->rest->authorizedCall(new CharacterBlueprintsGetRequest($this->id, $sorter), $this->token);
    }

    public function chatChannels()
    {
        return $this->esi->rest->authorizedCall(new CharacterChatChannelsGetRequest($this->id), $this->token);
    }

    public function corporationHistory()
    {
        return $this->esi->rest->call(new CharacterCorporationHistoryGetRequest($this->id));
    }

    public function fatigue()
    {
        return $this->esi->rest->authorizedCall(new CharacterFatigueGetRequest($this->id), $this->token);
    }

    public function medals()
    {
        return $this->esi->rest->authorizedCall(new CharacterMedalsGetRequest($this->id), $this->token);
    }

    public function notifications()
    {
        return $this->esi->rest->authorizedCall(new CharacterNotificationsGetRequest($this->id), $this->token);
    }

    public function contactsNotifications()
    {
        return $this->esi->rest->authorizedCall(new CharacterContactsNotificationsGetRequest($this->id), $this->token);
    }

    public function roles()
    {
        return $this->esi->rest->authorizedCall(new CharacterRolesGetRequest($this->id), $this->token);
    }

    public function standings()
    {
        return $this->esi->rest->authorizedCall(new CharacterStandingsGetRequest($this->id), $this->token);
    }

    public function assets(ISorter $sorter = null)
    {
        return $this->esi->rest->authorizedCall(new CharacterAssetsGetRequest($this->id, $sorter), $this->token);
    }

    public function bookmarks(ISorter $sorter = null)
    {
        return $this->esi->rest->authorizedCall(new CharacterBookmarksGetRequest($this->id, $sorter), $this->token);
    }

    public function calendar()
    {
        return $this->esi->rest->authorizedCall(new CharacterCalendarGetRequest($this->id), $this->token);
    }

    public function assetsLocations(array $ids)
    {
        return $this->esi->rest->authorizedCall(new CharacterAssetsLocationsPostRequest($this->id, $ids), $this->token);
    }
}
