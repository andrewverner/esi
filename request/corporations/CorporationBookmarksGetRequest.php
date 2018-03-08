<?php

namespace ESC\request\corporations;

use ESC\core\sorter\ISorter;
use ESC\response\struct\BookmarkStruct;

class CorporationBookmarksGetRequest extends CorporationRequest
{
    protected $url = '/corporations/{corporation_id}/bookmarks/';
    protected $responseType = self::RESPONSE_TYPE_LIST;
    protected $responseInstanceType = BookmarkStruct::class;

    public function __construct($corporationId, ISorter $sorter = null)
    {
        parent::__construct($corporationId);
        $this->sorter = $sorter;
    }
}
