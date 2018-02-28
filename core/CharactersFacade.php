<?php

namespace ESC\core;

use ESC\core\sorter\ISorter;
use ESC\request\characters\CharacterAffiliationPostRequest;
use ESC\request\characters\CharacterAgentsResearchGetRequest;
use ESC\request\characters\CharacterAssetsGetRequest;
use ESC\request\characters\CharacterAssetsLocationsPostRequest;
use ESC\request\characters\CharacterAssetsNamesPostRequest;
use ESC\request\characters\CharacterBlueprintsGetRequest;
use ESC\request\characters\CharacterBookmarksFoldersGetRequest;
use ESC\request\characters\CharacterBookmarksGetRequest;
use ESC\request\characters\CharacterCalendarEventAttendeesGetRequest;
use ESC\request\characters\CharacterCalendarEventGetRequest;
use ESC\request\characters\CharacterCalendarGetRequest;
use ESC\request\characters\CharacterChatChannelsGetRequest;
use ESC\request\characters\CharacterContactsNotificationsGetRequest;
use ESC\request\characters\CharacterContractBidsGetRequest;
use ESC\request\characters\CharacterContractItemsGetRequest;
use ESC\request\characters\CharacterContractsGetRequest;
use ESC\request\characters\CharacterCorporationHistoryGetRequest;
use ESC\request\characters\CharacterFatigueGetRequest;
use ESC\request\characters\CharacterMedalsGetRequest;
use ESC\request\characters\CharacterNotificationsGetRequest;
use ESC\request\characters\CharacterGetRequest;
use ESC\request\characters\CharacterPortraitGetRequest;
use ESC\request\characters\CharacterRolesGetRequest;
use ESC\request\characters\CharactersNamesGetRequest;
use ESC\request\characters\CharacterStandingsGetRequest;
use ESC\request\characters\CharacterStatsGetRequest;

//@todo CSPA POST

class CharactersFacade extends CommonFacade implements ICharactersFacade
{
    public function names(array $ids)
    {
        return $this->esi->rest->call(new CharactersNamesGetRequest($ids));
    }

    public function details($id = null)
    {
        return $this->esi->rest->call(new CharacterGetRequest($id ?: $this->id));
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

    public function bookmarksFolders(ISorter $sorter = null)
    {
        return $this->esi->rest->authorizedCall(new CharacterBookmarksFoldersGetRequest($this->id, $sorter), $this->token);
    }

    public function calendar()
    {
        return $this->esi->rest->authorizedCall(new CharacterCalendarGetRequest($this->id), $this->token);
    }

    public function calendarEvent($eventId)
    {
        return $this->esi->rest->authorizedCall(new CharacterCalendarEventGetRequest($this->id, $eventId), $this->token);
    }

    //@todo PUT
    public function calendarEventResponse($eventId) {}

    public function calendarEventAttendees($eventId)
    {
        return $this->esi->rest->authorizedCall(new CharacterCalendarEventAttendeesGetRequest($this->id, $eventId), $this->token);
    }

    public function assetsLocations(array $ids)
    {
        return $this->esi->rest->authorizedCall(new CharacterAssetsLocationsPostRequest($this->id, $ids), $this->token);
    }

    public function assetsNames(array $ids)
    {
        return $this->esi->rest->authorizedCall(new CharacterAssetsNamesPostRequest($this->id, $ids), $this->token);
    }

    public function portraits($characterId = null, $size = null)
    {
        $response = $this->esi->rest->call(new CharacterPortraitGetRequest($characterId ?: $this->id));
        return $size ? $response->{$size} : $response;
    }

    //@todo stats response struct @_@
    public function stats()
    {
        return $this->esi->rest->authorizedCall(new CharacterStatsGetRequest($this->id), $this->token);
    }

    public function affiliation(array $ids)
    {
        return $this->esi->rest->call(new CharacterAffiliationPostRequest($ids));
    }

    public function contracts()
    {
        return $this->esi->rest->authorizedCall(new CharacterContractsGetRequest($this->id), $this->token);
    }

    public function contractBids($contractId)
    {
        return $this->esi->rest->authorizedCall(new CharacterContractBidsGetRequest($this->id, $contractId), $this->token);
    }

    public function contractItems($contractId)
    {
        return $this->esi->rest->authorizedCall(new CharacterContractItemsGetRequest($this->id, $contractId), $this->token);
    }
}
