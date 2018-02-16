<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 16.02.18
 * Time: 12:57
 */

namespace ESC\core;

use ESC\request\corporations\CorporationAssetsGetRequest;
use ESC\request\corporations\CorporationAssetsLocationsPostRequest;
use ESC\request\corporations\CorporationAssetsNamesPostRequest;
use ESC\request\corporations\CorporationBookmarksFoldersGetRequest;
use ESC\request\corporations\CorporationBookmarksGetRequest;

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
}
