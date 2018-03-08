<?php

namespace ESC\request\corporations;

use ESC\core\sorter\ISorter;

class CorporationBookmarksFoldersGetRequest extends CorporationRequest
{
    protected $url = '/corporations/{corporation_id}/bookmarks/folders/';
    protected $responseType = self::RESPONSE_TYPE_RAW;

    public function __construct($corporationId, ISorter $sorter = null)
    {
        parent::__construct($corporationId);
        $this->sorter = $sorter;
    }
}
