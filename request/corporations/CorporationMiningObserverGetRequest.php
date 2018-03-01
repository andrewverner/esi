<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 01.03.18
 * Time: 16:52
 */

namespace ESC\request\corporations;

use ESC\response\corporations\CorporationMiningObserverResponse;

class CorporationMiningObserverGetRequest extends CorporationRequest
{
    protected $url = '/corporation/{corporation_id}/mining/observers/{observer_id}/';
    protected $responseType = self::RESPONSE_TYPE_SINGLE;
    protected $responseInstanceType = CorporationMiningObserverResponse::class;

    public function __construct($corporationId, $observerId)
    {
        parent::__construct($corporationId);
        $this->url = str_replace('{observer_id}', $observerId, $this->url);
    }
}
