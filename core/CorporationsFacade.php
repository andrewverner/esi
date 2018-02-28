<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 16.02.18
 * Time: 12:57
 */

namespace ESC\core;

use ESC\request\corporations\CorporationAllianceHistoryGetRequest;
use ESC\request\corporations\CorporationAssetsGetRequest;
use ESC\request\corporations\CorporationAssetsLocationsPostRequest;
use ESC\request\corporations\CorporationAssetsNamesPostRequest;
use ESC\request\corporations\CorporationBlueprintsGetRequest;
use ESC\request\corporations\CorporationBookmarksFoldersGetRequest;
use ESC\request\corporations\CorporationBookmarksGetRequest;
use ESC\request\corporations\CorporationContainersLogsGetRequest;
use ESC\request\corporations\CorporationContractBidsGetRequest;
use ESC\request\corporations\CorporationContractItemsGetRequest;
use ESC\request\corporations\CorporationContractsGetRequest;
use ESC\request\corporations\CorporationDivisionsGetRequest;
use ESC\request\corporations\CorporationFacilitiesGetRequest;
use ESC\request\corporations\CorporationGetRequest;
use ESC\request\corporations\CorporationIconsGetRequest;
use ESC\request\corporations\CorporationIssuedMedalsGetRequest;
use ESC\request\corporations\CorporationMedalsGetRequest;
use ESC\request\corporations\CorporationMembersGetRequest;
use ESC\request\corporations\CorporationMembersLimitGetRequest;
use ESC\request\corporations\CorporationMembersTitlesGetRequest;
use ESC\request\corporations\CorporationMemberTrackingGetRequest;
use ESC\request\corporations\CorporationOutpostGetRequest;
use ESC\request\corporations\CorporationOutpostsGetRequest;
use ESC\request\corporations\CorporationRolesGetRequest;
use ESC\request\corporations\CorporationRolesHistoryGetRequest;
use ESC\request\corporations\CorporationShareHoldersGetRequest;
use ESC\request\corporations\CorporationsNamesGetRequest;
use ESC\request\corporations\CorporationStandingsGetRequest;
use ESC\request\corporations\CorporationStarBaseGetRequest;
use ESC\request\corporations\CorporationStarBasesGetRequest;
use ESC\request\corporations\CorporationStructuresGetRequest;
use ESC\request\corporations\CorporationTitlesGetRequest;
use ESC\request\corporations\NPCCorporationsGetRequest;

class CorporationsFacade extends CommonFacade implements ICorporationsFacade
{
    public function assets()
    {
        return $this->esi->rest->authorizedCall(new CorporationAssetsGetRequest($this->id), $this->token);
    }

    public function assetsLocations(array $ids)
    {
        return $this->esi->rest->authorizedCall(new CorporationAssetsLocationsPostRequest($this->id, $ids), $this->token);
    }

    public function assetsNames(array $ids)
    {
        return $this->esi->rest->authorizedCall(new CorporationAssetsNamesPostRequest($this->id, $ids), $this->token);
    }

    public function bookmarks()
    {
        return $this->esi->rest->authorizedCall(new CorporationBookmarksGetRequest($this->id), $this->token);
    }

    public function bookmarksFolders()
    {
        return $this->esi->rest->authorizedCall(new CorporationBookmarksFoldersGetRequest($this->id), $this->token);
    }

    public function contracts()
    {
        return $this->esi->rest->authorizedCall(new CorporationContractsGetRequest($this->id), $this->token);
    }

    public function contractBids($contractId)
    {
        return $this->esi->rest->authorizedCall(new CorporationContractBidsGetRequest($this->id, $contractId), $this->token);
    }

    public function contractItems($contractId)
    {
        return $this->esi->rest->authorizedCall(new CorporationContractItemsGetRequest($this->id, $contractId), $this->token);
    }

    public function details($id = null)
    {
        return $this->esi->rest->call(new CorporationGetRequest($id ?: $this->id));
    }

    public function allianceHistory($id = null)
    {
        return $this->esi->rest->call(new CorporationAllianceHistoryGetRequest($id ?: $this->id));
    }

    public function blueprints()
    {
        return $this->esi->rest->authorizedCall(new CorporationBlueprintsGetRequest($this->id), $this->token);
    }

    public function containersLogs()
    {
        return $this->esi->rest->authorizedCall(new CorporationContainersLogsGetRequest($this->id), $this->token);
    }

    public function divisions()
    {
        return $this->esi->rest->authorizedCall(new CorporationDivisionsGetRequest($this->id), $this->token);
    }

    public function facilities()
    {
        return $this->esi->rest->authorizedCall(new CorporationFacilitiesGetRequest($this->id), $this->token);
    }

    public function icons($id = null)
    {
        return $this->esi->rest->call(new CorporationIconsGetRequest($id ?: $this->id));
    }

    public function medals()
    {
        return $this->esi->rest->authorizedCall(new CorporationMedalsGetRequest($this->id), $this->token);
    }

    public function issuedMedals()
    {
        return $this->esi->rest->authorizedCall(new CorporationIssuedMedalsGetRequest($this->id), $this->token);
    }

    public function members()
    {
        return $this->esi->rest->authorizedCall(new CorporationMembersGetRequest($this->id), $this->token);
    }

    public function membersLimit()
    {
        return $this->esi->rest->authorizedCall(new CorporationMembersLimitGetRequest($this->id), $this->token);
    }

    public function membersTitles()
    {
        return $this->esi->rest->authorizedCall(new CorporationMembersTitlesGetRequest($this->id), $this->token);
    }

    public function membersTracking()
    {
        return $this->esi->rest->authorizedCall(new CorporationMemberTrackingGetRequest($this->id), $this->token);
    }

    public function outposts()
    {
        return $this->esi->rest->authorizedCall(new CorporationOutpostsGetRequest($this->id), $this->token);
    }

    public function outpost($outpostId)
    {
        return $this->esi->rest->authorizedCall(new CorporationOutpostGetRequest($this->id, $outpostId), $this->token);
    }

    public function roles()
    {
        return $this->esi->rest->authorizedCall(new CorporationRolesGetRequest($this->id), $this->token);
    }

    public function rolesHistory()
    {
        return $this->esi->rest->authorizedCall(new CorporationRolesHistoryGetRequest($this->id), $this->token);
    }

    public function shareHolders()
    {
        return $this->esi->rest->authorizedCall(new CorporationShareHoldersGetRequest($this->id), $this->token);
    }

    public function standings()
    {
        return $this->esi->rest->authorizedCall(new CorporationStandingsGetRequest($this->id), $this->token);
    }

    public function starBases()
    {
        return $this->esi->rest->authorizedCall(new CorporationStarBasesGetRequest($this->id), $this->token);
    }

    public function starBase($starBaseId)
    {
        return $this->esi->rest->authorizedCall(new CorporationStarBaseGetRequest($this->id, $starBaseId), $this->token);
    }

    public function structures()
    {
        return $this->esi->rest->authorizedCall(new CorporationStructuresGetRequest($this->id), $this->token);
    }

    public function titles()
    {
        return $this->esi->rest->authorizedCall(new CorporationTitlesGetRequest($this->id), $this->token);
    }

    public function names(array $ids)
    {
        return $this->esi->rest->call(new CorporationsNamesGetRequest($ids));
    }

    public function npcCorporations()
    {
        return $this->esi->rest->call(new NPCCorporationsGetRequest());
    }
}
