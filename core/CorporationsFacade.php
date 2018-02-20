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
use ESC\request\corporations\CorporationMedalsGetRequest;

class CorporationsFacade extends EVEFacade implements ICorporationsFacade
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
}
