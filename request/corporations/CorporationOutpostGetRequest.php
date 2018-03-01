<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 11:45
 */

namespace ESC\request\corporations;

use ESC\response\corporations\CorporationOutpostResponse;

class CorporationOutpostGetRequest extends CorporationRequest
{
    protected $url = '/corporations/{corporation_id}/outposts/{outpost_id}/';
    protected $responseType = self::RESPONSE_TYPE_SINGLE;
    protected $responseInstanceType = CorporationOutpostResponse::class;

    public function __construct($corporationId, $outpostId)
    {
        parent::__construct($corporationId);
        $this->url = str_replace('{outpost_id}', $outpostId, $this->url);
    }
}
